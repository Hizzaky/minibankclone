<?php include '../../fun.php';
    if ($_SESSION['lvl'] != "kasir") {
        echo "<script>location.replace('../../login')</script>";
    } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MINI BANK</title>
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
		/*padding: 1em;*/
	}
	div.box{
		background: white;
		/*width: 50%;*/
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
	.up{
		text-transform: uppercase;
	}
	label.x{
		color: red;
	}
	input.c{
		text-align: center;
	}
	input.bln{
		width: 30% !important;
	}
	div.kop{
		/*background-color: lightgreen;*/
		/*border-radius: 10px;*/
		border-top-left-radius: 2em;
		border-bottom-right-radius: 2em;
		/*opacity: 70%;*/
		padding: 3px;
		/*background: #7bcc78;*/
		border: 5px solid green;
	}
	h2.kop{
		color: black;
		font-family: Segoe Print;
		font-weight: bolder;
	}
	h3.h3{
		color: white;
	}
</style>
<body>

    <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-dark ">
            <div class="container-fluid">
					<div class="col-md-2" ></div>
						<div style="margin-left: 5em;">
			            	<img src="../../pic/fai.png" width="100" height="100" alt="Computer Hope">
			        	</div>
			        <div class=" text-center ">
						<h3 class="heading-section h3"><strong>APLIKASI MINI BANK</strong></h3>
						<h3 class="heading-section h3"><strong>EKONOMI SYARIAH</strong></h3>
			        </div>
			        <div class="" style="margin-right: 20em;">
			            <img src="../../pic/mb.png" width="100" height="100" alt="Computer Hope">
			        </div>
         	</div>
        </nav>
    <!-- END Navbar -->
	<div class="container">
		<br>
	    <div style="background: ; border-radius: 1em; text-align: center;">
			<div class="" style="font-family: arial; color: black;">
				<h4><i>BISMILLAAHIRRAHMAANIRRAHIIM</i></h4>
			</div>
		</div>
			<hr><a class="btn btn-info" href="../pengajuan">< Kembali</a><hr>
		<span id="data"></span>
	</div><hr>
</body>
</html>
<script type="text/javascript">
	fetch("data.php")
		.then(res=>res.text())
		.then(txt=>document.getElementById('data').innerHTML=txt);
</script>
