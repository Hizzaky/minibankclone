<?php session_start();
	if ($_SESSION['lvl'] != "cs") {
		echo "<script>location.replace('../login')</script>";
	} ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MINI BANK</title>
    <link rel="stylesheet" type="text/css" href="../trap/css/bootstrap.css">
    <script src="../trap/js/jquery.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->
    <!-- <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script> -->

</head>
<style type="text/css">
    body {
        background-color: #fbfbfb;
    }
    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }
    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 100px 0 0; /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
    }
    @media (max-width: 991.98px) {
        .sidebar {
            width: 100%;
        }
    }
    .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }
    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    }
    .dropdown {
        position: relative;
        display: inline-block;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 100px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }
    th, td {
        white-space: nowrap;
    }
    .wrp{
        white-space: nowrap;
    }
    .kop{
    	/*padding-left: 0.5em;*/
    }
    h3.h3{
    	color: white;
    }
</style>
<body>
<!--Main Navigation-->
    <header>
    <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                	Welcome
                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true" style="text-align: center;"><strong><?php echo $_SESSION['nama'] ?></strong>
                    </a>
                    <a  class="list-group-item list-group-item-action py-2 ripple" style="text-align: center;">
                        <br><strong>MENU</strong></a>
                    <a href="../verif" class="list-group-item list-group-item-action py-2 ripple ">
                        <span>Verifikasi Nasabah</span></a>
                    <a href="../nasabah" class="list-group-item list-group-item-action py-2 ripple ">
                        <span>Nasabah Terverifikasi</span></a>
                    <a href="" class="list-group-item list-group-item-action py-2 ripple active">
                        <span>Pengajuan Pembiayaan Nasabah</span></a>
                    <a href="../../out.php" class="list-group-item list-group-item-action py-2 ripple" style="color: red;">
                        <span>Logout</span></a>
                </div>
            </div>
        </nav>
    <!-- END Sidebar -->
    <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
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
    </header>
    <!--Main layout-->
    <main style="margin-top: 110px;">
        <div class="container pt-4">
            <div style="margin-left: 0px;">
               <div class="card" style="width: 100%;" >
                   <!-- isi -->
                   <?php include 'home.php'; ?>
               </div>
            </div>
        </div>
    </main><br>
    <!--END Main layout-->
</body>
</html>