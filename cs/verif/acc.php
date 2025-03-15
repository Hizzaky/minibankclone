<?php
include '../../fun.php';
if(isset($_POST["id"]))	
{
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$sql="UPDATE mb_t_nasabah SET verif='1' WHERE id='$id'";
	if (db()->query($sql)) {
		echo "	<div class='alert alert-success' style='text-align:center;height:1px'>
					Akun Nasabah Dengan Nama <strong> $nama</strong> BERHASIL Disetujui.
				</div> ";
	}else{
		echo "	<div class='alert alert-danger' style='text-align:center;height:1px'>
					<strong>$nama</strong> Gagal Disetujui!
				</div> ";
	}
}
?>