<?php include '../../fun.php';

	$id_nasabah=$_SESSION['nid'];
	$data=slct2("mb_t_pinjaman","WHERE id_nasabah='$id_nasabah'");
	$pinjaman=$data['pinjaman'];
	$sisa_cicilan=$data['sisa_cicilan'];
	$jumlah_bulan=$data['jumlah_bulan'];
	$jumlah_bulan_cicil=$data['jumlah_bulan_cicil'];
	$cicilan=$data['cicilan'];
	$jumlah_bulan_cicil=$jumlah_bulan_cicil+1;
	if ($jumlah_bulan_cicil==$jumlah_bulan) {
		$sisa_cicilan=0;
	}else{
		$sisa_cicilan=$sisa_cicilan-$cicilan;
	}
	$sql="UPDATE mb_t_pinjaman SET sisa_pinjaman='$sisa_cicilan',jumlah_bulan_cicil='$jumlah_bulan_cicil' WHERE id_nasabah='$id_nasabah'";
	db()->query($sql);
	
	echo "<script>location.replace('../pencairan?nid=".$id_nasabah."')</script>";

 ?>