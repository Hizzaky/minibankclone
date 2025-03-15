<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MINI BANK UMMAT</title>
	<link rel="stylesheet" type="text/css" href="../../trap/MDB/css/mdb.min.css">
	<script src="../../trap/js/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
</head>
<style type="text/css">
	body{
		background: lightblue;
		padding: 1em;
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
</style>
<body>
	<div class="container"><br>
	    <div style="background: ; border-radius: 1em; text-align: center;">
			<div class="" style="font-family: arial; color: black;">
				<h4><i>BISMILLAAHIRRAHMAANIRRAHIIM</i></h4>
			</div>
		</div>
			<hr><h2>HALAMAN AKUN NASABAH</h2>
		<div class="box">
			<section>
				<div class="info">	
		        	<span id="info"></span>
				</div>
				<div class="table-responsive text-nowrap" >
			        <!--Table-->
			        <table class="table table-striped" id="user_data"><hr>
			          <!--Table head-->
			          <thead>
			            <tr>
			              <th>#</th>
			              <th>Nama Nasabah</th>
			              <th>Username</th>
			              <th>Jenis Identitas Utama</th>
			              <th>Jenis Identitas Pelengkap</th>
			              <th>Alamat Domisili</th>
			              <th>Pekerjaan</th>
			              <th>Jabatan</th>
			              <th>Nomor HP</th>
			              <th>Email</th>
			              <th></th>
			              <th></th>
			            </tr>
			          </thead>
			          <!--Table head-->
			        </table>
			        <!--Table-->
			      </div>
			</section>
		</div>
	</div>
	<hr>
</body>
</html>
<script type="text/javascript" language="javascript">
	$(document).ready(function () {
		fetch_data();
		function fetch_data() {
			var dataTable = $('#user_data').DataTable({
				scrollY: "500px",
				scrollX: "500px",
		        paging: false,
				"processing" : true,
				"serverSide" : true,
				"order" : [],
				"ajax" : {
					url:"data_fetch.php",
					type:"POST"
				}
			});
		}
		// end fect_data
  $(document).on('click', '.acc', function(){
   var id = $(this).attr("id");
   var nama = $(this).attr("name");
   var username = $(this).attr("idd");
   if(confirm("Setujui Akun "+nama+" ?"))
   {
    $.ajax({
     url:"btl.php",
     method:"POST",
     data:{id:id,nama:nama},
     success:function(data){
      $('#info').html('<div class="alert alert-success"><strong>'+data+'</strong></div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    $('#alert_message').html('');
   }
  });// end acc
    $(document).on('click', '.del', function(){
   var id = $(this).attr("id");
   var nama = $(this).attr("name");
   if(confirm("Hapus Akun "+nama+" ?"))
   {
    $.ajax({
     url:"del.php",
     method:"POST",
     data:{id:id,nama:nama},
     success:function(data){
      $('#info').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    $('#info').html('');
   }
  }); // end del
	})
</script>