<!DOCTYPE html>
<html>
<head>
  	<title>MINI BANK UMMAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<!-- <link rel="stylesheet" href="../login/css/style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="../trap/css/bootstrap.css"> -->
</head>
<style>
	body{
		font-family: arial;
		padding-left: 5%;
		padding-right: 5%;
	}
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
	h2{
		text-align: center;
	}
	div.top{
		padding-top: 5%;
	}
	div.card{
		padding: 5px;
	}
	div.card-header{
		background: lightblue;
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
	canvas#signature {
		border: 2px solid black;
	}

	form>* {
		margin: 10px;
	}
	

</style>
</head>
<body>
	<div class="container">
		<div class="top col-md-12">
			<h2><strong>REGISTER AKUN MINI BANK UMMAT</strong></h2><br>
		</div>
		<div class="card" style="background: #eee;">
			<form action="ttd.php" method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="card">
							<!-- <div class="card-header">Tanda Tangan :</div> -->
							<div class="card-body">
								<div class="form-group mb-3">
									<label class="label" for="">Tanda Tangan Nasabah<label class="x"> *</label></label>

									<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-5">
											<div class="form-inline">
												<div>
													<canvas id="signature" width="300" height="150"></canvas>
												</div>
												<div>
													<input type="hidden" name="signature" />
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>		
				</div>
				<div class="" style="padding: 1em;">
					<button class="btn btn-info form-control"><strong>NEXT</strong></button>
				</div>
			</form>
		</div> <!-- end card -->
		<br>
	</div>
</body>
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
	var signature = document.getElementsByName('signature')[0];

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
</script>
</html>