<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" href="../trap/css/ionicons.min.css">
	<!-- <link rel="stylesheet" href="../trap/css/bootstrap.css"> -->

</head>
<style type="text/css">

nav.primary-navigation {
  margin: 0 auto;
  display: inline;
  /*padding: 120px 0 0 0;*/
  text-align: center;
  font-size: 16px;
}
nav.primary-navigation ul li {
  list-style: none;
  margin: 0 auto;
  /*border-left: 2px solid #3ca0e7;*/
  display: inline-block;
  padding: 0 30px;
  position: relative;
  text-decoration: none;
  text-align: center;
  font-family: arvo;
}
nav.primary-navigation li a {
  color: black;
}
nav.primary-navigation li a:hover {
  color: #3ca0e7;
}
nav.primary-navigation li:hover {
  cursor: pointer;
}
nav.primary-navigation ul li ul {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  padding-left: 0;
  left: 0;
  display: none;
  background: white;
}
nav.primary-navigation ul li:hover > ul,
nav.primary-navigation ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: block;
  min-width: 250px;
  text-align: left;
  padding-top: 20px;
  box-shadow: 0px 3px 5px -1px #ccc;
}
nav.primary-navigation ul li ul li {
  clear: both;
  width: 100%;
  text-align: left;
  margin-bottom: 20px;
  border-style: none;
}
nav.primary-navigation ul li ul li a:hover {
  padding-left: 10px;
  border-left: 2px solid #3ca0e7;	
  transition: all 0.3s ease;
}

a {
  text-decoration: none;
}
a:hover {
  color: #3ca0e7;
}

ul li ul li a {
  transition: all 0.5s ease;
}

.positiontxt{
	/*padding-top: 17px;*/
	display: block;
	color: white !important;
	font-size: 14px !important;
}

.footer {
  display: flex;
  flex-flow: row wrap;
  padding: 30px 30px 20px 30px;
  color: #2f2f2f;
  background-color: #000;
  border-top: 1px solid #e5e5e5;
}

.footer > * {
  flex:  1 100%;
}

.footer__addr {
  margin-right: 1.25em;
  margin-bottom: 2em;
}

.footer__logo {
  font-family: 'Pacifico', cursive;
  font-weight: 400;
  text-transform: lowercase;
  font-size: 1.5rem;
}

.footer__addr h2 {
  margin-top: 1.3em;
  font-size: 15px;
  font-weight: 400;
}

.nav__title {
  font-weight: 400;
  font-size: 15px;
}

.footer address {
  font-style: normal;
  color: #999;
}

.footer__btn {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 36px;
  max-width: max-content;
  background-color: rgb(33, 33, 33, 0.07);
  border-radius: 100px;
  color: #2f2f2f;
  line-height: 0;
  margin: 0.6em 0;
  font-size: 1rem;
  padding: 0 1.3em;
}

.footer ul {
  list-style: none;
  padding-left: 0;
}

.footer li {
  line-height: 2em;
}

.footer a {
  text-decoration: none;
}

.footer__nav {
  display: flex;
	flex-flow: row wrap;
}

.footer__nav > * {
  flex: 1 50%;
  margin-right: 1.25em;
}

.nav__ul a {
  color: #999;
}

.nav__ul--extra {
  column-count: 2;
  column-gap: 1.25em;
}

.legal {
  display: flex;
  flex-wrap: wrap;
  color: #999;
}
  
.legal__links {
  display: flex;
  align-items: center;
}

.heart {
  color: #2f2f2f;
}

@media screen and (min-width: 24.375em) {
  .legal .legal__links {
    margin-left: auto;
  }
}

@media screen and (min-width: 40.375em) {
  .footer__nav > * {
    flex: 1;
  }
  
  .nav__item--extra {
    flex-grow: 2;
  }
  
  .footer__addr {
    flex: 1 0px;
  }
  
  .footer__nav {
    flex: 2 0px;
  }
}
}

/*p{
  padding-left: 1.5em;
  padding-right: 1.5em;
}*/
</style>
<body>
	<header>
	<div id="container">
		<div id="mainpic">
			<h1>Green<span class="off">Mountain</span></h1>
			<h2>A template by Bryant Smith</h2>
		</div>   

<!-- 		<div id="menu">
			<ul>
				<li class=""><a href="#">Profil Prodi</a></li>
				<li class=""><a href="#">Profil Bank Mini</a></li>
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown" role="buton" aria-expanded="false">
						Visi Misi Prodi<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role = "menu" style="width: 15% !important; background-color: rgba(15, 117, 51, 0.558);">
						<a href="" class="" style="text-align: center;">Visi</a>
						<a href="" class="" style="color: ;">Misi</a>
						<a></a>
					</ul>
				</li>

				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown" role="buton" aria-expanded="false">
						Visi Misi Bank Mini<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role = "menu" style="background-color: rgba(15, 117, 51, 0.558);">
						<a href="" class="" style="text-align: center;">Visi</a>
						<a href="" class="" style="color: ;">Misi</a>
						<a></a>
					</ul>
				</li>

				<li class=""><a href="#">Produk</a></li>
				<li class=""><a href="#">Login</a></li>
			</ul>
		</div>
 -->
		<div id="menu">
			<nav role="navigation" class="primary-navigation">
				<ul >
					<li ><a class="positiontxt" href="#">Profil Prodi</a></li>
					<li ><a class="positiontxt" href="#">Profil Bank Mini</a></li>
					<li ><a class="positiontxt" href="#">Visi Misi Prodi &dtrif;</a>
						<ul class="dropdown positiontxt">
							<li ><a href="#">Visi Prodi</a></li>
							<li ><a href="#">Misi Prodi</a></li>
						</ul>
					</li>

					<li ><a class="positiontxt" href="#">Visi Misi Bank Mini &dtrif;</a>
						<ul class="dropdown positiontxt">
							<li ><a href="#">Visi Bank Mini</a></li>
							<li ><a href="#">Misi Bank Mini</a></li>
						</ul>
					</li>

					<li ><a class="positiontxt" href="#" >Produk &dtrif;</a>
						<ul class="dropdown positiontxt">
							<li ><a href="#">Akad Wadiah</a></li>
							<li ><a href="#">Akad Mudharabah</a></li>
							<li ><a href="#">Akad Musyarakah</a></li>
							<li ><a href="#">Akad Murabahah</a></li>
							<li ><a href="#">Akad Salam</a></li>
							<li ><a href="#">Akad Istisna</a></li>
							<li ><a href="#">Akad Ijarah</a></li>
							<li ><a href="#">Akad Ijarah Mintahiyah Bit-Tamlik</a></li>
							<li ><a href="#">Akad Qardh</a></li>
						</ul>
					</li>
					<li ><a class="positiontxt" href="#">Login</a></li>
				</ul>
			</nav>
 		</div>
 	</header>
 	<main>
    <?php include 'wid.html'; ?>
		<div id="content" style="">
      <div style="padding-left: 1.5em;padding-right: 1.5em;">
        <h2>You may use this template in any manner you like. All I ask is that you leave the link back to my site at the bottom of the page. </h2>
  			<h2>You may use this template in any manner you like. All I ask is that you leave the link back to my site at the bottom of the page. </h2>
  			<p>&nbsp;</p>
  			<p>&nbsp;</p>
  			<h3>Template Notes</h3>
  			<p>The main image can be changed by either replacing the current image with another one of the same size (900x402), or using a new one of what ever dimensions you'd like.  If you choose the latter, you must open up style.css and change the dimensions of #mainpic, as well as the file name if that is different. If you would like to move the heading around in the above image, find &quot;#mainpic h1&quot; in style.css and modify it's &quot;left&quot; and &quot;top&quot; properties, this is also true for the h2 tag.</p>
  			<p>&nbsp;</p>
  			<h3>More information</h3>
  			<p>I decided to leave the content portion open for the templates users to do as they wish with a blank canvas. I don't like to restrict my users too much, and for this reason I leave the defining of any content related styles to you.</p>
  			<p>&nbsp;</p>
  			<h3>Template Notes</h3>
  			<p>The main image can be changed by either replacing the current image with another one of the same size (900x402), or using a new one of what ever dimensions you'd like.  If you choose the latter, you must open up style.css and change the dimensions of #mainpic, as well as the file name if that is different. If you would like to move the heading around in the above image, find &quot;#mainpic h1&quot; in style.css and modify it's &quot;left&quot; and &quot;top&quot; properties, this is also true for the h2 tag.</p>
  			<p>&nbsp;</p>
  			<h3>More information</h3>
  			<p>I decided to leave the content portion open for the templates users to do as they wish with a blank canvas. I don't like to restrict my users too much, and for this reason I leave the defining of any content related styles to you.</p>
  			<p>&nbsp;</p>
  			<p>&nbsp;</p>
  			<p>&nbsp;</p>
  			<p>&nbsp;</p>

  			<!-- <div id="footer"><h3><a href="http://www.bryantsmith.com">florida web design</a></div> -->
      </div>

      <?php 
        date_default_timezone_set('Asia/Singapore');
        $time= new DateTime();
        // echo $time->format('Y-m-d H:i:s');
        echo $time->format('H:i:s');
        $x=$time->format('H:i:s');
        $alrm="18:11:00";
        if ($x>=$alrm) {
          echo "sama";
        }
       ?>

			</div>
		</div>
    </main>

<footer class="footer" >
  <div class="footer__addr" style="padding: 3em !important;">
    <h1 class="logo" style="color: white !important; font">Mini Bank Ekonomi Syariah</h1>
        
    <h2>Contact</h2>
    
    <address>
      5534 Somewhere In. The World 22193-10212<br>
          
      <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
    </address>
  </div>
  
  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title" style="color: white !important;" >Media</h2>

      <ul class="nav__ul">
        <li>
          <a href="#">Online</a>
        </li>

        <li>
          <a href="#">Print</a>
        </li>
            
        <li>
          <a href="#">Alternative Ads</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item nav__item--extra">
      <h2 class="nav__title" style="color: white !important;">Technology</h2>
      
      <ul class="nav__ul nav__ul--extra">
        <li>
          <a href="#">Hardware Design</a>
        </li>
        
        <li>
          <a href="#">Software Design</a>
        </li>
        
        <li>
          <a href="#">Digital Signage</a>
        </li>
        
        <li>
          <a href="#">Automation</a>
        </li>
        
        <li>
          <a href="#">Artificial Intelligence</a>
        </li>
        
        <li>
          <a href="#">IoT</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item">
      <h2 class="nav__title" style="color: white !important;">Contact Person</h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Alamat</a>
        </li>
        
        <li>
          <a href="#">Email</a>
        </li>
        
        <li>
          <a href="#">Nomor Kontak</a>
        </li>
      </ul>
    </li>
  </ul>
  
  <div class="legal">
    <p>&copy; Wassalamualaikum Warahmatullahi Wabarakatuh </p>
  </div>
</footer>	

		<script src="../trap/js/jquery.min.js"></script>
		<script src="../trap/js/popper.js"></script>
		<script src="../trap/js/bootstrap.min.js"></script>
		<script src="../trap/js/main.js"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
<script type="text/javascript">
  // wid();
  function wid() {
    fetch("wid.html")
      .then(res=>res.text())
      .then(txt=>{document.getElementById('wid').innerHTML=txt});
  }
</script>