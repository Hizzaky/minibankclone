<?php
include '../../fun.php';

if(isset($_POST["id"]))	
{
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$sql="DELETE FROM mb_t_nasabah WHERE id='$id'";
 	if(db()->query($sql))
 	{
 		echo "	<div class='alert alert-success' style='text-align:center;height:1px'>
					<strong>Akun Dengan Nama $nama BERHASIL Dihapus!</strong>
				</div> ";
 	}else{
 		echo "	<div class='alert alert-danger' style='text-align:center;height:1px'>
					<strong>Akun Dengan Nama $nama GAGAL Dihapus!</strong>
				</div> ";
 	}
}
?>