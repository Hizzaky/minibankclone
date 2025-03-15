<?php include '../../fun.php';
	$id_nasabah=$_GET['nid'];
	$biaya=$_GET['biaya'];
	$cicil=$_GET['cicil'];
	$bln=$_GET['bln'];

	// print_r($_GET);


	$cek=cek_data("mb_t_pinjaman","id_nasabah",$id_nasabah);
	if ($cek==0) {
		// $sql="INSERT INTO mb_t_pinjaman (id_nasabah,pinjaman,sisa_cicilan,jumlah_bulan_cicil,jumlah_bulan,cicilan,status) VALUES ('$id_nasabah','$biaya','$biaya','0','$bln','$cicil','0')";

		$sql="INSERT INTO mb_t_pinjaman (id_nasabah,pinjaman,sisa_pinjaman,jumlah_bulan_cicil,jumlah_bulan,cicilan,status) VALUES ('$id_nasabah','$biaya','$biaya','0','$bln','$cicil','0')";
		db()->query($sql);
		db()->query("UPDATE mb_t_kelengkapan SET pengajuan_admin='1' WHERE id_nasabah='$id_nasabah'");

	}else {
		// $sql="UPDATE mb_t_pinjaman SET pinjaman='$biaya', jumlah_bulan='$bln', sisa_cicilan='$biaya', cicilan='$cicil' WHERE id_nasabah='$id_nasabah'";
		$sql="UPDATE mb_t_pinjaman SET pinjaman='$biaya', jumlah_bulan='$bln', sisa_pinjaman='$biaya', cicilan='$cicil' WHERE id_nasabah='$id_nasabah'";
		db()->query($sql);
	}
	echo "<script>location.replace('../kelengkapan')</script>";
 ?>