<?php include '../../fun.php';
	$id_nasabah=$_POST['nid'];
	$pinjaman=$_POST['pinjaman'];
	$jumlah_bulan=$_POST['jumlah_bulan'];
	$bln_cicil_awal=$_POST['tgl_cicil_awal'];
	$cicilan=$pinjaman/$jumlah_bulan;
	$sql="UPDATE mb_t_pinjaman SET jumlah_bulan='$jumlah_bulan', tgl_mulai='$bln_cicil_awal', cicilan='$cicilan', sisa_cicilan='$pinjaman', status='1' WHERE id_nasabah='$id_nasabah'";
	db()->query($sql);
	echo "<script>location.replace('../pencairan')</script>";

 ?>