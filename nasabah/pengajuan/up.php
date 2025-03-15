<?php include "../../fun.php";
	$id=$_SESSION['id'];
	$jenis=$_GET['data'];
	$x=cek_data("mb_t_kelengkapan","id_nasabah",$id);
	if ($x==0) {
		$sql="INSERT INTO mb_t_kelengkapan (id_nasabah,pengajuan_nasabah,pengajuan_cs,pengajuan_admin) VALUES ('$id','0','0','0')";
		db()->query($sql);
	}
	$dir=$id.$_SESSION['username'];
	$uploads_dir = 'file/'.$dir;
    if (!is_dir($uploads_dir)) {
    	mkdir($uploads_dir);
    }
    $file=mysqli_real_escape_string(db(), $_FILES["file"]["name"]);
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    $name=$jenis.".".$ext;
    $field=$_POST['field'];

    $sql="UPDATE mb_t_kelengkapan SET ".$field. " = '$name' WHERE id_nasabah = '$id'";

    if (db()->query($sql)) {
    	// echo "sukses DB-";

    	// if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploads_dir.'/'.$file)) {
    	if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploads_dir.'/'.$jenis.".".$ext)) {
    		header("location:../pengajuan");
    	}else{
    		header("location:../pengajuan");
    	}
    }else{
    	header("location:../pengajuan");
    }

 ?>
