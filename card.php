<?php
	require_once("utils/_init.php");
	$adkars=$adkar_store->findAll();
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ادكار - بدكر الله تطمئن القلوب</title>
	<link rel="stylesheet" href="./dist/css/bundle.css">
	<link rel="stylesheet" href="./dist/css/style.css">
	<link rel="stylesheet" href="styles.css">
	
	<style>
	body {
		background-color:green;
	}
	</style>
</head>
<body>
	<nav style="background:green" class="navbar navbar-expand-sm navbar-primary bg-primary text-light">
		<a class="navbar-brand" href="#"><img src="logo.jpg" style="width:80px;length:80px;margin:-20px;border-radius: 50%;"></a>
		<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
				aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavId">
			<form id="search-form" method="post" class="form-inline my-2 my-lg-0 mx-auto">
				<input class="form-control mr-sm-2" type="text" placeholder="ابحث عن دعاء">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">بحث</button>
			</form>
		</div>
	</nav>
<body>
	<?php
		if(isset($_GET['id'])){
			foreach ($adkars as $adkar) {
				if($_GET['id']==$adkar["ID"]){
				echo '<h1>'.$adkar["TITLE"].'</h1>';
				echo '<audio controls>
				<source src="'.$adkar["AUDIO_URL"].'" type="audio/ogg">
				<source src="'.$adkar["AUDIO_URL"].'" type="audio/mpeg">
				  </audio>';
				}
			}
		}
	?>

<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Heading 1</h4>
          <ul class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="#">Payment Center</a></li>
            <li><a href="#">Contact Directory</a></li>
            <li><a href="#">Forms</a></li>
            <li><a href="#">News and Updates</a></li>
            <li><a href="#">FAQs</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Heading 2</h4>
          <ul class="list-unstyled">
            <li><a href="#">Website Tutorial</a></li>
            <li><a href="#">Accessibility</a></li>
            <li><a href="#">Disclaimer</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Webmaster</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Heading 3</h4>
          <ul class="list-unstyled">
            <li><a href="#">Parks and Recreation</a></li>
            <li><a href="#">Public Works</a></li>
            <li><a href="#">Police Department</a></li>
            <li><a href="#">Fire</a></li>
            <li><a href="#">Mayor and City Council</a></li>
            <li>
              <a href="#"></a>
            </li>
          </ul>
        </div>
      </div>
    	<div class="col-md-3">
    		<h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>				
		</div>
    </div>
	<div class="row">
		<div class="col-md-12 copy">
			<p class="text-center">&copy; Copyright 2018 - Company Name.  All rights reserved.</p>
		</div>
	</div>


  </div>
  </div>
</footer>
	</body>
</html>