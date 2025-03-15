<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<span id="register"></span>
</body>
<script type="text/javascript">
	fetch("data_diri.php")
		.then(res=>res.text())
		.then(txt=>document.getElementById('register').innerHTML=txt);

	function reg(){

		var id=document.getElementById('id').value,
			form=document.getElementById('formReg'),
			data = new FormData(form);

		if (id==2) {
			var dir="data_pekerjaan.php";
		}
		else if (id==3) {
			var dir="data_keuangan.php";
		}
		else if (id==4) {
			var dir="register.php";
		}else{
			var dir="akun.html";
		}

		fetch(dir, {method:"POST", body:data})
			.then(res=>res.text())
			.then(txt=>{document.getElementById('register').innerHTML=txt});
		return false;
	}
</script>
</html>