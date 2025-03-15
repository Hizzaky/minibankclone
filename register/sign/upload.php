<?php 
	// print_r($_POST);
	$name=$_POST['name'];
	$img = $_POST['signature'];
	$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img));
	$export=file_put_contents('sign/sign.png', $data);
	if ($export) {
		echo "	<div class='alert alert-success' style='text-align:center'>
					<strong>Upload berhasil</strong>
				</div> <hr>
				<div style='width:300px; background-color:silver'>
					<img src='sign/signature.png' />
				</div>
					";

	}else{
		echo "	<div class='alert alert-danger' style='text-align:center'>
					<strong>upload gagal</strong>
				</div> ";

	}
 ?>