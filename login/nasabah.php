<?php include '../fun.php';
	$username=escStr($_POST['username']);
	$password=escStr($_POST['password']);
	$cek="username='$username' AND password='$password'";
	$sql="SELECT * FROM mb_t_nasabah WHERE ".$cek;
	$data=db()->query($sql)->fetch_assoc();
	if (!$data) {
		echo "	<div class='alert alert-danger' style='text-align:center'>
					<strong>Login GAGAL! Username/Password Salah!</strong>
				</div> ";
	}else{
		$lvl=$data['lvl'];
		$verif=$data['verif'];
		$_SESSION['id']=$data['id'];
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['nama']=$data['nama_nasabah'];
		$_SESSION['lvl']=$lvl;
		$_SESSION['verif']=$verif;
		if ($verif == 0 OR $verif == 1) {
			if ($verif == 0) {
				echo "	<div class='alert alert-warning' style='text-align:center'>
							<strong>Akun Belum Diverifikasi! Silahkan Hubungi CS.</strong>
						</div> ";
			}elseif ($verif == 1) {
				// header("location:../nasabah");
				echo "<input id='dir' value='../nasabah' hidden>";
			}
		}else{
			echo "	<div class='alert alert-danger' style='text-align:center'>
						<strong>Login GAGAL!</strong>
					</div> ";
		}
	}



	


 ?>