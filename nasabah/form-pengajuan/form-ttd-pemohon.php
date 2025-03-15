<?php include '../../fun.php'; 
	foreach($_POST as $key => $item) {
		$_SESSION[$key]=$_POST[$key];
	} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Pengajuan Pinjaman</title>
	<!-- <link rel="stylesheet" type="text/css" href="../../trap/css/bootstrap.css"> -->
	<script type="text/javascript" src="../../trap/js/jquery.js"></script>
</head>
<style type="text/css">

	body{
		font-family: sans-serif;
		/*padding-top: 3em;*/
		background: lightslategrey;
	}

	/* Firefox */
	input[type=number] {
		-moz-appearance: textfield;
	}
	body{
		/*padding-top: 2em;*/
	}
	li div{
		border: 1px solid black;
		display: table-cell;

	}

	canvas#signature {
		border: 2px solid black;
	}

	form>* {
		margin: 10px;
	}

.btn-outline-primary {
  color: #007bff;
  background-color: transparent;
  background-image: none;
  border-color: #007bff;
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-outline-primary:focus, .btn-outline-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: #007bff;
  background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}
.card-body{
	/*border: 3px solid black;*/
}
.container{
	padding-left: 31em;
	padding-right: 30em;

}
.container2{
	padding-left: 25em;
	padding-right: 25em;
}
</style>
<body>
	<div class="container">
		<!-- <div><h2>logo</h2></div> -->
		<!-- <h4>BISMILLAAHIRRAHMAANIRRAHIIM</h4> -->
		<!-- <h4>FORM APLIKASI PEMBIAYAAN CUSTOMER BANK MINI SYARIAH EKSYAR FAI UMMAT</h4><hr> -->
	</div>
	<div class="container">
		<!-- <h5 class="blck">Kepada</h5> -->
		<!-- <h5 class="blck">BANK MINI SYARIAH EKSYAR FAI UMMAT</h5> -->
		<!-- <br>Harap diisi lengkap untuk kelancaaran proses. -->
	</div>
	<br><br><br><br>
	<form action="form-ttd-pasangan.php" method="POST" enctype="multipart/form-data">	
		<!-- <div class="container"> -->
			<div class="container">
				<div class="row">
						<div class="card-body">
							<div class="form-group mb-3">
								<label class="label" for="">Tanda Tangan Pemohon</label><br><br>
								<div class="row">
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-inline">
											<div>
												<canvas id="signature" width="300" height="150"></canvas>
											</div>
											<div>
												<input type="hidden" name="signature_pemohon" />
												<div style="padding-left: 1em;">
													<label><?php echo $_SESSION['nama_pribadi'] ?></label>
												</div>
											</div>
										</div><br>
										<div style="text-align: right;" >
											<button type="button" onclick="clearcanvas1()"> Hapus</button>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>	
			<div class="container2" style="text-align: center;">
				<hr>
				<button class="btn btn-primary" style="width: 80%; height: 3em;">Selanjutnya</button>
			</div>
		<!-- </div>	 -->
	</form>
</body>
</html>
<script type="text/javascript">

	// $(window).resize(respondCanvas);

	function respondCanvas() {
	    c.attr('width', jQuery("#daily").width());
	    c.attr('height', jQuery("#daily").height());
	    //Call a function to redraw other content (texts, images etc)
	    myNewChart = new Chart(ct).Bar(data, options);
	}



	var canvas = document.getElementById('signature');
	var ctx = canvas.getContext("2d");
	var drawing = false;
	var prevX, prevY;
	var currX, currY;
	var signature = document.getElementsByName('signature_pemohon')[0];

	canvas.addEventListener("mousemove", draw);
	canvas.addEventListener("mouseup", stop);
	canvas.addEventListener("mousedown", start);

	function start(e) {
		drawing = true;
	}

	function stop() {
		drawing = false;
		prevX = prevY = null;
		signature.value = canvas.toDataURL();
	}

	function draw(e) {
		if (!drawing) {
			return;
		}
		// Test for touchmove event, this requires another property.
		var clientX = e.type === 'touchmove' ? e.touches[0].clientX : e.clientX;
		var clientY = e.type === 'touchmove' ? e.touches[0].clientY : e.clientY;
		currX = clientX - canvas.offsetLeft;
		currY = clientY - canvas.offsetTop;
		if (!prevX && !prevY) {
			prevX = currX;
			prevY = currY;
		}

		ctx.beginPath();
		ctx.moveTo(prevX, prevY);
		ctx.lineTo(currX, currY);
		ctx.strokeStyle = 'black';
		ctx.lineWidth = 2;
		ctx.stroke();
		ctx.closePath();


		prevX = currX;
		prevY = currY;
	}

	function onSubmit(e) {
	  // console.log({
	  //   'name': document.getElementsByName('name')[0].value,
	  //   'signature': signature.value,
	  // });
	  // document.getElementById('info').innerHTML=signature.value;

		var form=document.getElementById(''),
			data=new FormData(form);

		fetch("upload.php", {method:"POST", body:data})
			.then(res=>res.text())
			.then(txt=>{document.getElementById('info').innerHTML=txt});

  		return false;
	}

	function clearcanvas1()
{
    var canvas = document.getElementById('signature'),
        ctx = canvas.getContext("2d");
    ctx.clearRect(0, 0, canvas.width, canvas.height);
}

</script>