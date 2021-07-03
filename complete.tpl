<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Seahorse">
<meta name="author" content="Brand Inc">
<link rel="shortcut icon" src="favicon.ico">
<title>Twins Lounge</title>
<meta name="keywords" content="partyies, events, club, entertainment">
<meta name="description" content="The Twins Lounge Experience revolves around entertainment with a twist of old school flavor, deep house, lounge and the likes. It is all about events that provide elegance and entertainment, whilst offering comfort and style!">          
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="21 days">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="og:title" content="Twins Lounge"> 
<meta property="og:image" content="http://www.twinslounge.com/images/logo.png"> 
<meta property="og:url" content="http://www.twinslounge.com">
<meta property="og:site_name" content="Twins Lounge">
<meta property="og:type" content="website">
<meta property="og:description" content="The Twins Lounge Experience revolves around entertainment with a twist of old school flavor, deep house, lounge and the likes. It is all about events that provide elegance and entertainment, whilst offering comfort and style!">
<!--Core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:900' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="css/mainstyle.css" rel="stylesheet">
<link href="css/responsive_styles.css" rel="stylesheet">
    
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<header id="head-box">
    <div class="top-bar black-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="logo-box">
                    <img src="images/logo.png" alt="Twinz Lounge" />
                </div>
                <div class="intro-box">
                    <h2 class="red-txt">Coming soon</h2>
                    <p class="white-txt">Thank you for subscribing with us {$participantData.participant_name} {$participantData.participant_surname}. We will get back to you as soon as possible.</p>
                </div>
            </div>
        </div>
    </div>
</header>
<footer class="box">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="copy-txt">&copy; All rights reserved. © 2014. www.twinslounge.co.za, its sponsors, contributors and advertisers disclaim all liability for any loss, damage, injury or expense that might arise from the use of, or reliance upon, the services contained herein.</div>
            </div>
            <div class="col-sm-6">
                <div class="soc-icons pull-right">
                    <a href="https://www.facebook.com/twinzlounge" target="_blank" class="icon-box-sm">
                        <span class="fa fa-facebook"></span>
                    </a>
                    <a href="https://twitter.com/twinslounge" target="_blank" class="icon-box-sm">
                        <span class="fa fa-twitter"></span>
                    </a>
                    <span class="by-txt up-txt">Design &amp; developed by</span>
                    <a href="http://www.willow-nettica.com/" target="_blank"><img src="images/willow_logo.gif" width="243" height="18" alt="Willow-Nettica" /></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/validation-init.js"></script>
<script src="js/bootstrap.min.js"></script>
{literal}
<script type="text/javascript">
    $(document).ready(function(){
        $(".alert").alert();

        $(".fake-btn").click(function(){
            $(this).slideUp(400);
        });

        $(".close-form").click(function(){
            $(".fake-btn").fadeIn(500);
        });
    });
    //<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$('#status').fadeOut(); // will first fade out the loading animation
			$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
			$('body').delay(350).css({'overflow':'visible'});
		})
	//]]>
</script>
{/literal}
</body>
</html>