<?php include '../../fun.php';
    if ($_SESSION['lvl'] != "kasir") {
        echo "<script>location.replace('../../login')</script>";
    } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../trap/css/bootstrap.css">
	<script type="text/javascript" src="../../trap/js/jquery.js"></script>
	<script type="text/javascript" src="../../trap/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	/* Chrome, Safari, Edge, Opera */
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
	/* Firefox */
	input[type=number] {
		-moz-appearance: textfield;
	}
	body{
		background: lightblue;
	}
	div.box{
		background: white;
		border-radius: 5px;
		padding: 10px;
	}
	h2{
		text-align: center;
	}
	th{
		font-weight: bold !important;
		background-color: aliceblue !important;
	}
		div.top{
		padding-top: 5%;
	}
	div.card{
		padding: 5px;
	}
	div.card-header{
		background: lightblue;
		text-align: center;
	}
	label.label{
		font-weight: bold;
	}
	input.fc{
		width: 70% !important;
	}
	label.pr{
		padding-right: 5px;
	}
	label.pl{
		padding-left: 5px !important;
	}
	input.up{
		text-transform: uppercase;
	}
	label.x{
		color: red;
	}
	input.c{
		text-align: center;
	}
</style>
<body>
	<div class="container">
		<hr>
		<h2>HALAMAN ADMIN</h2>
		<hr>
		<h2>
			<a class="btn btn-info" href="../pengajuan">PENGAJUAN PINJAMAN NASABAH</a>
			<a class="btn btn-primary" href="#">CICLAN NASABAH</a>
			<a class="btn btn-danger" href="../../out.php">Logout</a>
		</h2>
		<input type="text" id="nid" name="nid" value="<?php echo $_GET['nid']; ?>" hidden>
		<span id="data"></span>
	</div><br>
	    <div style="background: ; border-radius: 1em; text-align: center;">
			<div class="" style="font-family: arial; color: black;">
				<h4><i>BISMILLAAHIRRAHMAANIRRAHIIM</i></h4>
			</div>
		</div><hr>
</body>
</html>
<script type="text/javascript">
	var form=document.getElementById('nid').value,
		data = new FormData();
	data.append("DATA", JSON.stringify(form));
	fetch("data.php",{method:"POST", body:data})
		.then(res=>res.text())
		.then(txt=>document.getElementById('data').innerHTML=txt);
</script>
