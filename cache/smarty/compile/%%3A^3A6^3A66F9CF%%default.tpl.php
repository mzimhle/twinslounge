<?php /* Smarty version 2.6.20, created on 2015-07-27 03:17:44
         compiled from default.tpl */ ?>
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
<?php echo '
<div id="fb-root"></div>
<script type="text/javascript">

(function(d){
   var js, id = \'facebook-jssdk\'; if (d.getElementById(id)) {return;}
   js = d.createElement(\'script\'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   d.getElementsByTagName(\'head\')[0].appendChild(js);
}(document));
 
window.fbAsyncInit = function() {
  FB.init({
	appId      : \'979914808689217\',
	status     : true, 
	cookie     : true,
	xfbml      : true,
	oauth      : true,
  });
	FB.Event.subscribe(\'auth.login\', function () {
		  window.location = window.location.href;
	  });
};
 
function fb_login(){
	FB.login(function(response) {

		if (response.authResponse) {
		
			access_token = response.authResponse.accessToken; //get access token
			user_id = response.authResponse.userID; //get FB UID

			FB.api(\'/me?fileds=id,first_name,last_name,gender,link,email\', function(response) {
			
				$.ajax({
					type: "GET",
					url: "default.php",
					data: {
						ajax: \'fb\',
						id: response.id,
						email: response.email,
						first_name: response.first_name,
						last_name: response.last_name,
						gender: response.gender,
						link: response.link
					},
					dataType: "json",
					success: function(data){						
							
						if(data.result == 1) {
							window.location = \'/registration/complete/\';
						} else {							
							alert(data.message);
						}						
					}
				});
			});

		} else {

		}
	}, {
		scope: \'email,user_location\'
	});
}
</script>
'; ?>

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
                    <p class="white-txt">The Twins Lounge Experiance is all about Good Food, Good Music, Good People...!</p>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <h1>Twins Lounge</h1>
                <p>The Twins Lounge Experience revolves around entertainment with a twist of old school flavor, deep house, lounge and the likes. It is all about events that provide elegance and entertainment, whilst offering comfort and style! Our events boast an ideal area for hospitality, with first class facilities for bar service and catering, as well as comfortable seating and standing space.</p>
                <p>Twins Lounge Experience offers selected experienced DJs for your partying need and experienced photography to capture unforgettable moments whilst creating amazing memories that last.</p>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="over-box">
                            <div class="icon-box">
                                <i class="fa fa-cutlery"></i>
                            </div>
                            <p class="white-txt up-txt">Good Food</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="over-box">
                            <div class="icon-box">
                                <i class="fa fa-music"></i>
                            </div>
                            <p class="white-txt up-txt">Good Music</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="over-box">
                            <div class="icon-box">
                                <i class="fa fa-users"></i>
                            </div>
                            <p class="white-txt up-txt">Good People</p>
                        </div>
                    </div>
                </div>
                <div class="fake-btn" data-toggle="collapse" data-target="#demo" aria-expanded="false" aria-controls="demo">
                    <div class="btn-reg">
                        <span class="up-txt">Get the low down on the latest events and launch dates</span>
                        <span class="up-txt big-btn">Subscribe Now!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="black-bg" >
    <div id="demo" class="container collapse" aria-expanded="false">
        <div class="box">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Subscribe Now<small>Get the low down on the latest events and launch dates</small></h3>
					<!--
                    <p style="text-align: left;">
                        <p>You can subscribe using your social network account(s) below</p>
                        <button type="button" class="btn btn-lg btn-primary" onclick="fb_login();">
                            <span class="fa fa-facebook-square" style="font-size: 18px;"></span>&nbsp;&nbsp; Facebook
                        </button>&nbsp;&nbsp;
                        <button type="button" class="btn btn-lg btn-primary">
                            <span class="fa fa-linkedin-square" style="font-size: 18px;"></span>&nbsp;&nbsp; LinkedIn
                        </button>&nbsp;&nbsp;
                        <button type="button" class="btn btn-lg btn-primary">
                            <span class="fa fa-google-plus-square" style="font-size: 18px;"></span>&nbsp;&nbsp; Google+
                        </button>&nbsp;&nbsp;
                        <button type="button" class="close-form btn btn-default up-txt btn-lg red-bg white-txt" data-toggle="collapse" data-target="#demo" aria-expanded="true" aria-controls="demo">Cancel</button>
                    </p>
					
                    <hr />
                    <p>Or use your details below</p>
					-->
					<?php if (isset ( $this->_tpl_vars['errorArray'] ) && $this->_tpl_vars['errorArray'] != ''): ?>
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                       <span class="up-txt"><?php echo $this->_tpl_vars['errorArray']; ?>
</span>
                    </div>                
					<?php endif; ?>
                    <form role="form" id="reg_form" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="participant_name"  id="participant_name" value="" class="form-control" />
                        </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="participant_surname"  id="participant_surname"  value="" class="form-control" />
                        </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                            <label>Email address</label>
                            <input type="text" name="participant_email"  id="participant_email" value="" class="form-control" />
                        </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                            <label>Cellphone Number</label>
                            <input type="text" name="participant_cellphone"  id="participant_cellphone"  value="" class="form-control" />
                        </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default up-txt btn-lg">Subscribe</button>&nbsp;&nbsp;
                            <button type="button" class="close-form btn btn-primary up-txt btn-lg" data-toggle="collapse" data-target="#demo" aria-expanded="true" aria-controls="demo">Cancel</button>
                        </div>
                    </form>
                    <div
                </div>
            </div>
        </div>
    </div>
</section>
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
<?php echo '
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
			$(\'#status\').fadeOut(); // will first fade out the loading animation
			$(\'#preloader\').delay(350).fadeOut(\'slow\'); // will fade out the white DIV that covers the website.
			$(\'body\').delay(350).css({\'overflow\':\'visible\'});
		})
	//]]>
</script>
'; ?>

</body>
</html>