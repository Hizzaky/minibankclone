<?php include '../../fun.php';
	// print_r($_POST);
	$id_nasabah=$_POST['nid'];
	$pinjaman=$_POST['pinjaman'];
	$cek=cek_data("mb_t_pinjaman","id_nasabah",$id_nasabah);
	if ($cek==0) {
		$sql="INSERT INTO mb_t_pinjaman (id_nasabah,pinjaman,status) VALUES ('$id_nasabah','$pinjaman','0')";
		db()->query($sql);
	}else {
		$sql="UPDATE mb_t_pinjaman SET pinjaman='$pinjaman' WHERE id_nasabah='$id_nasabah'";
		db()->query($sql);
	}

	echo "<script>location.replace('../kelengkapan?nid=".$id_nasabah."')</script>";
 ?>