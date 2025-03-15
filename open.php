<?php include 'fun.php';
	$id=$_GET['id'];
	$file=$_GET['file'];

	$data=slct2("mb_t_kelengkapan","WHERE id_nasabah=".$id);
	$data2=slct2("mb_t_nasabah","WHERE id=".$id);

	// print_r($data2);

	$npath="nasabah/pengajuan/file/".$id.$data2['username']."/".$file;
	// $npath="kknummat.com/".$data['kk'];
	// header("location:http://docs.google.com/gview?url=$npath");

 ?>