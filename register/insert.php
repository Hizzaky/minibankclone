<?php include '../fun.php'; error_reporting(0);

	foreach($_POST as $key => $item) {
  		// echo $key.' isinya (<strong>'.$item.'</strong>)<br>';
  		$_SESSION[$key]=$_POST[$key];
	}

	if (is_null($_SESSION['kwn']) || empty($_SESSION['kwn']) || $_SESSION['kwn']=="") {
		header("location:akun");
	}
	if ($_SESSION['kwn']=="Lainnya") {
		$_SESSION['kwn']=$_SESSION['kwn2'];
		unset($_SESSION['kwn2']);
	}else{
		unset($_SESSION['kwn2']);
	}
	if ($_SESSION['jenis_identitas_utama']=="Lainnya") {
		$_SESSION['jenis_identitas_utama']=$_SESSION['jenis_identitas_utama2'];
		unset($_SESSION['jenis_identitas_utama2']);
	}else{
		unset($_SESSION['jenis_identitas_utama2']);
	}
	if ($_SESSION['jenis_identitas_pelengkap']=="Lainnya") {
		$_SESSION['jenis_identitas_pelengkap']=$_SESSION['jenis_identitas_pelengkap2'];
		unset($_SESSION['jenis_identitas_pelengkap2']);
	}else{
		unset($_SESSION['jenis_identitas_pelengkap2']);
	}
	if ($_SESSION['pendidikan_terakhir']=="Lainnya") {
		$_SESSION['pendidikan_terakhir']=$_SESSION['pendidikan_terakhir2'];
		unset($_SESSION['pendidikan_terakhir2']);
	}else{
		unset($_SESSION['pendidikan_terakhir2']);
	}
	if ($_SESSION['tipe_pekerjaan']=="Lainnya") {
		$_SESSION['tipe_pekerjaan']=$_SESSION['tipe_pekerjaan2'];
		unset($_SESSION['tipe_pekerjaan2']);
	}else{
		unset($_SESSION['tipe_pekerjaan2']);
	}
	if ($_SESSION['tujuan_rekening']=="Lainnya") {
		$_SESSION['tujuan_rekening']=$_SESSION['tujuan_rekening2'];
		unset($_SESSION['tujuan_rekening2']);
	}else{
		unset($_SESSION['tujuan_rekening2']);
	}
	if ($_SESSION['sumber_dana']=="Lainnya") {
		$_SESSION['sumber_dana']=$_SESSION['sumber_dana2'];
		unset($_SESSION['sumber_dana2']);
	}else{
		unset($_SESSION['sumber_dana2']);
	}

	$lvl="'nasabah'";
	$verif="'0'";

	$arkey=[];
	$aritem=[];
	$i=0;
	foreach($_SESSION as $key => $item) {
  		// echo $key.' isinya (<strong>'.$item.'</strong>)<br>';
  		// $_SESSION[$key]=$_POST[$key];
  		$arkey[$i]=$key;
  		$aritem[$i]="'".escStr($item)."'";
  		$i++;
	}

	array_push($arkey,"lvl");
	array_push($arkey,"verif");
	array_push($aritem,$lvl);
	array_push($aritem,$verif);

	$key=implode(",", $arkey);
	$data=implode(",", $aritem);

	$sql="INSERT INTO mb_t_nasabah ($key) VALUES($data)";
	if (db()->query($sql)) {
		session_destroy();
		echo '<script>location.replace("verif.html")</script>';

	}
 ?>