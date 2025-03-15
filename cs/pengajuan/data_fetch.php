<?php
include '../../fun.php';
v_pengajuan();

$columns = array('id_nasabah', 'nama_nasabah', 'jenis_identitas_utama', 'jenis_pekerjaan', 'nama_instansi_pekerjaan', 'jabatan_pekerjaan', 'hp_pribadi', 'email', 'produk', 'kk', 'ktp', 'form', 'pengajuan_nasabah', 'pengajuan_cs', 'pengajuan_admin');
$query = "SELECT * FROM v_pengajuan_nasabah ";
if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE nama_nasabah LIKE "%'.$_POST["search"]["value"].'%" 
 OR jenis_identitas_utama LIKE "%'.$_POST["search"]["value"].'%" 
 OR jenis_pekerjaan LIKE "%'.$_POST["search"]["value"].'%" 
 OR jabatan_pekerjaan LIKE "%'.$_POST["search"]["value"].'%" 
 OR nama_instansi_pekerjaan LIKE "%'.$_POST["search"]["value"].'%" 
 OR hp_pribadi LIKE "%'.$_POST["search"]["value"].'%" 
 OR email LIKE "%'.$_POST["search"]["value"].'%" 
 OR kk LIKE "%'.$_POST["search"]["value"].'%" 
 OR ktp LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
//  $query .= 'ORDER BY id DESC ';
 $query .= 'ORDER BY id_nasabah DESC ';
}
$query1 = '';
if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$number_filter_row = mysqli_num_rows(mysqli_query(db(), $query));
$result = mysqli_query(db(), $query . $query1);
$data = array();
$i=1;
// $dir="http://docs.google.com/gview?url=../../nasabah/pengajuan/file/".$row["id_nasabah"].$row["username"]."/";
// $dir="http://docs.google.com/gview?url=../../nasabah/pengajuan/file/".$row["id_nasabah"].$row["username"]."/";
while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="username">' . $i . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="nama_nasabah">' . $row["nama_nasabah"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="jenis_identitas_utama">' . $row["jenis_identitas_utama"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="jenis_pekerjaan">' . $row["jenis_pekerjaan"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="jabatan_pekerjaan">' . $row["jabatan_pekerjaan"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="nama_instansi_pekerjaan">' . $row["nama_instansi_pekerjaan"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="jumlah_pengajuan">Rp. ' . number_format($row["jumlah_pengajuan"]) . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="gaji_tetap_pemohon">Rp. ' . number_format($row["gaji_tetap_pemohon"]) . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="gaji_tetap_pasangan">Rp. ' . number_format($row["gaji_tetap_pasangan"]) . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="gaji_xtetap_pemohon">Rp. ' . number_format($row["gaji_xtetap_pemohon"]) . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="gaji_xtetap_pasangan">Rp. ' . number_format($row["gaji_xtetap_pasangan"]) . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="hp_pribadi">' . $row["hp_pribadi"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="hp_menikah">' . $row["hp_menikah"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="email">' . $row["email"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="produk">' . $row["produk"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="kk"><a href='."../../nasabah/pengajuan/file"."/".$row["id_nasabah"].$row["username"]."/".$row["kk"].' target='."_blank".'>' . $row["kk"] . '</div>';

 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="ktp"><a href='."../../nasabah/pengajuan/file"."/".$row["id_nasabah"].$row["username"]."/".$row["ktp"].' target='."_blank".'>' . $row["ktp"] . '</div>';
 // $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="ktp"><a href='."../../nasabah/pengajuan/file"."/".$row["id_nasabah"].$row["username"]."/".$row["ktp"].' target='."_blank".'>' . $row["ktp"] . '</div>';

 $sub_array[] = '<button type="button" name="'.$row["nama_nasabah"].'" class="btn btn-info btn-xs acc" id="'.$row["id_nasabah"].'" idd="'.$row["id_nasabah"].'">Terima Pengajuan</button>';

 $sub_array[] = '<button type="button" name="'.$row["nama_nasabah"].'" class="btn btn-danger btn-xs del" id="'.$row["id_nasabah"].'" idd="'.$row["id_nasabah"].'">Tolak Pengajuan</button>';

 $i++;
 $data[] = $sub_array;
}
function get_all_data()
{
 $query = "SELECT * FROM v_pengajuan_nasabah ";
 $result = mysqli_query(db(), $query);
 return mysqli_num_rows($result);
}
$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data(db()),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);
echo json_encode($output);
?>