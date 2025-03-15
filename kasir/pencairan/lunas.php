<?php include '../../fun.php';
	$id_nasabah=$_SESSION['nid'];
	$sql="DELETE FROM mb_t_pinjaman WHERE id_nasabah='$id_nasabah'";
	sql($sql);

	$sql="UPDATE mb_t_kelengkapan SET pengajuan_nasabah='0', pengajuan_cs='0', pengajuan_admin='0' WHERE id_nasabah='$id_nasabah'";
	sql($sql);
	
	echo "<script>alert('PINJAMAN NASABAH BERHASIL DILUNASKAN')</script>";
	echo "<script>location.replace('../nasabah')</script>";

 ?>