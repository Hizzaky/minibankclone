<?php
include '../../fun.php';
v_nasabah();

$columns = array('id','username', 'nama_nasabah', 'jenis_identitas_utama', 'jenis_identitas_pelengkap', 'alamat_nasabah', 'tipe_pekerjaan', 'jabatan', 'hp', 'email');
$query = "SELECT * FROM v_nasabah ";
if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE username LIKE "%'.$_POST["search"]["value"].'%" 
 OR nama_nasabah LIKE "%'.$_POST["search"]["value"].'%" 
 OR jenis_identitas_utama LIKE "%'.$_POST["search"]["value"].'%" 
 OR jenis_identitas_pelengkap LIKE "%'.$_POST["search"]["value"].'%" 
 OR alamat_nasabah LIKE "%'.$_POST["search"]["value"].'%" 
 OR tipe_pekerjaan LIKE "%'.$_POST["search"]["value"].'%" 
 OR jabatan LIKE "%'.$_POST["search"]["value"].'%" 
 OR hp LIKE "%'.$_POST["search"]["value"].'%" 
 OR email LIKE "%'.$_POST["search"]["value"].'%" 
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
 $query .= 'ORDER BY id DESC ';
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
while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="username">' . $i . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="nama_nasabah">' . $row["nama_nasabah"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="username">' . $row["username"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="jenis_identitas_utama">' . $row["jenis_identitas_utama"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="jenis_identitas_pelengkap">' . $row["jenis_identitas_pelengkap"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="alamat_nasabah">' . $row["alamat_nasabah"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="tipe_pekerjaan">' . $row["tipe_pekerjaan"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="jabatan">' . $row["jabatan"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="hp">' . $row["hp"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="email">' . $row["email"] . '</div>';

 $sub_array[] = '<button type="button" name="'.$row["nama_nasabah"].'" class="btn btn-warning btn-xs acc" id="'.$row["id"].'" idd="'.$row["username"].'">Batalkan</button>';

 $sub_array[] = '<button type="button" name="'.$row["nama_nasabah"].'" style="font-size: 10px" class="btn btn-danger btn-xs del" id="'.$row["id"].'" idd="'.$row["username"].'">Hapus</button>';
 $i++;
 $data[] = $sub_array;
}
function get_all_data()
{
 $query = "SELECT * FROM v_nasabah ";
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