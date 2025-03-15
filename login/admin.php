<?php include '../fun.php';
	$username=escStr($_POST['username']);
	$password=escStr($_POST['password']);
	$cek="username='$username' AND password='$password'";
	$sql="SELECT * FROM mb_t_admin WHERE ".$cek;
	$data=db()->query($sql)->fetch_assoc();
	if (!$data) {
		echo "	<div class='alert alert-danger' style='text-align:center'>
					<strong>Login GAGAL! Username/Password Salah!</strong>
				</div> ";
	}else{
		$lvl=$data['lvl'];
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['nama']=$data['nama_admin'];
		$_SESSION['id']=$data['id'];
		$_SESSION['lvl']=$lvl;
		if ($lvl == "admin" OR $lvl == "cs" OR $lvl == "kasir") {
			if ($lvl == "admin") {
				// header("location:../admin");
				echo "<input id='dir' value='../admin' hidden>";
				
			}elseif ($lvl == "cs") {
				echo "<input id='dir' value='../cs' hidden>";

			}elseif ($lvl == "kasir") {
				echo "<input id='dir' value='../kasir' hidden>";
				// header("location:../kasir");
			}
		}else{
			echo "	<div class='alert alert-danger' style='text-align:center'>
						<strong>Login GAGAL!</strong>
					</div> ";
		}
	}



	


 ?>