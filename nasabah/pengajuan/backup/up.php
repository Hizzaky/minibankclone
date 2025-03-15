<?php include "../../fun.php";
	$id=$_SESSION['id'];
	$x=cek_data("mb_t_kelengkapan","id_nasabah",$id);
	if ($x==0) {
		$sql="INSERT INTO mb_t_kelengkapan (id_nasabah,pengajuan_nasabah,rab,pengajuan_cs,pengajuan_admin) VALUES ('$id','0','0','0','0')";
		db()->query($sql);
	}
	// $data=slct("mb_t_nasabah", $id);
	$dir=$id.$_SESSION['username'];
	$uploads_dir = 'file/'.$dir;
    if (!is_dir($uploads_dir)) {
    	mkdir($uploads_dir);
    }
    $file=mysqli_real_escape_string(db(), $_FILES["file"]["name"]);
    // $file_name = mysqli_real_escape_string(db(), $file);
    // $tname = mysqli_real_escape_string(db(), $_FILES["file"]["tmp_name"]);
    // $tname = escStr($_FILES["file"]["tmp_name"]);
    $field=$_POST['field'];
    // echo $tname.",". $uploads_dir.'/'.$file;

    $sql="UPDATE mb_t_kelengkapan SET ".$field. " = '$file' WHERE id_nasabah = '$id'";

    // var_dump($_FILES);

    if (db()->query($sql)) {
    	echo "sukses DB-";
    	// if (move_uploaded_file($tname, $uploads_dir.'/'.$file)) {
    	if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploads_dir.'/'.$file)) {
    		header("location:../pengajuan");
    	}else{
    		header("location:../pengajuan");
    	}
    }else{
    	header("location:../pengajuan");
    }

	// $field=arKey($_POST);
	// $data=escStr($_POST[$field]);
	// $sql="UPDATE mb_t_kelengkapan SET $field='$data' WHERE id_nasabah='$id'";
	// if (db()->query($sql)) {
	// 	header("location:../pengajuan");
	// }else{
	// 	header("location:../pengajuan");
	// }
 ?>
