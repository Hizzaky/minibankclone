<?php
include '../../fun.php';
v_pengajuan();

$columns = array('id_nasabah', 'nama_nasabah', 'pinjaman', 'status');
$query = "SELECT * FROM v_cicilan ";
if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE nama_nasabah LIKE "%'.$_POST["search"]["value"].'%" 
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
while($row = mysqli_fetch_array($result))
{
 // $tgl=date_format($row['tgl_mulai'],"d-M-Y");
 $sub_array = array();
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="username">' . $i . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="nama_nasabah">' . $row["nama_nasabah"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="pinjaman">Rp. ' . $row["pinjaman"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="jumlah_bulan">' . $row["jumlah_bulan"] . ' Bulan</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="cicilan">' . $row["cicilan"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id_nasabah"].'" data-column="tgl_mulai">' . $row["tgl_mulai"] . '</div>';

 $sub_array[] = '<a type="button" class="btn btn-info btn-xs " id="'.$row["id_nasabah"].'" href="conv.php?nid='.$row['id_nasabah'].'">Cek Cicilan Nasabah</a>';

 $i++;
 $data[] = $sub_array;
}
function get_all_data()
{
 $query = "SELECT * FROM v_cicilan ";
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