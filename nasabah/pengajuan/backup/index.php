<?php include '../../fun.php';
	if ($_SESSION['lvl'] != "nasabah") {
		echo "<script>location.replace('../../login')</script>";
	}else{
		include 'index.html';
	}
 ?>