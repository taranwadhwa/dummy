<!DOCTYPE html>
<html lang="en">
<head>
<title>BB Direct</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="assets/style.css" />
<link rel="shortcut icon" href="img/favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider({
  auto: true,
  pause: 9000
 });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $(".btn_nav").click(function(){
    $(".all_wrapper").animate({left:'250px'});
	$(".btn_nav").css("display","none");
	$(".btn_nav_close").css("display","block");
  });
  $(".btn_nav_close").click(function(){
    $(".all_wrapper").animate({left:'0px'});
	$(".btn_nav_close").css("display","none");
	$(".btn_nav").css("display","block");
  });
});
</script>
<!--[if IE]>
  <script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
<?php include_once("include/mobile-header.php"); ?>
<section class="all_wrapper">
<?php include_once("include/header.php"); ?>	
    <div class="main_cont container">
    	<h1>BB Direct is the leading provider of quality mailing lists, data hygiene services, and integrated direct marketing data.</h1>
    </div>
    
    <div class="home_slider">
        <ul class="bxslider">
            <li class="slide1">
                <div class="container">
                    <div class="cont">
                        <h3>Handcrafted, Precisely Targeted Mailing Lists</h3>
                        <p>Postal & Email, Consumers and Businesses</p>
                    </div>
                </div>
            </li>
            <li class="slide2">
                <div class="container">
                    <div class="cont">
                        <h3>Integrated Data Delivery</h3>
                        <p>API’s, Affiliate Sites, Monitored FTP’s</p>
                    </div>
                </div>
            </li>
            <li class="slide3">
                <div class="container">
                    <div class="cont">
                        <h3>Data Hygiene & Enhancement Services</h3>
                        <p>Mail Better, Mail Smarter</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
    <div class="bottom_sec">
    	<div class="container">
        	<div class="cont fl">
            	<h2>Try Us Out Today!</h2>
                <ul class="points">
                	<li>Need a <strong class="green">Consumer Mailing List</strong> Count?</li>
                    <li>Want Pricing on an <strong class="green">Email Marketing Campaign</strong>?</li>
                    <li>Have a Question About <strong class="green">Database Enhancement</strong> or <strong class="green">Data Hygiene</strong>?</li>
                </ul>
                <p>Whether you need a <strong class="green">consumer mailing list</strong> or <strong class="green">business mailing list</strong>, our data experts are standing by to help you with any direct marketing data questions. Please call us today, or get immediate questions answered by submitting a Quick Quote Request. It's easy to use and you'll get an immediate response.</p>
                <p class="large"><strong>We want to hear from you!</strong></p>
            </div>
            <?php include_once("include/contact-form.php"); ?>
        </div>
    </div>
    <?php include_once("include/footer.php"); ?>
    <div class="copyright">
    	<div class="container">
        	<span class="fl">Copyright 2014 BB Direct, Inc</span>

            <span class="fr">Website Design & Development by <img src="img/icon_stickboy.png" alt=""> <a href="http://www.stickboycreative.com" target="_blank">Stickboy Creative</a></span>
        </div>
    </div>
</section>
</body>
</html>