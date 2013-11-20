<?php
if(isset($_POST["name"]) && $_POST["name"] != "")
{
	$name 		= $_POST["name"];
	$email 		= $_POST["email"];
	$subject 	= $_POST["subject"];
	$message 	= $_POST["message"];
	
	$to = "ken.sopheap@gmail.com";
	$from = $email;
	//end of message 
    $headers  = "From: $from\r\n"; 
    $headers .= "Content-type: text/html\r\n"; 

    //options to send to cc+bcc 
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]"; 
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]"; 
     
    // now lets send the email. 
    mail($to, $subject, $message, $headers); 
}
?>
<!DOCTYPE html>

<html lang="en-gb">

<head>
	<!--[if lt IE 7]><style type="text/css">html{display:none;}</style><script>alert('Please get a new browser!');</script><![endif]-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="js/jquery.1.5.2.js"><\/script>')</script>

	<script>
		jQuery.noConflict();
	</script>

	<!--[if IE]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<meta name="keywords" content="restaurant, cafe, template, coffee shop, te contei" />
	<meta name="rights" content="Demente Design" />
	<meta name="language" content="en-GB" />
	<meta name="title" content="Welcome to Te Contei" />
	<meta name="description" content="SushiThai." />

	<title>SushiThai - Contact</title>
	
	<link href="favicon.ico" rel="shortcut icon" />

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/template.css" media="screen" />
	<link rel="stylesheet" href="css/colorbox.css" />
	<link rel="stylesheet" href="css/options.css" /> 
	
	<noscript>
		<style>
		#nav li:hover > ul, #nav li ul li:hover > ul,.sidebar ul.menu li:hover > ul, .sidebar ul.menu ul li:hover > ul{display: block;}
		</style>
	</noscript>

	<script src="js/scripts.js"></script>
	
	<script>	
		jQuery(function(){

			jQuery("#content-block").preloader({
				delay: 100
			});
						
			jQuery('.jquery-menu').enhanceMenu({
				effect: 'slide',
				duration: 200,
				delayIn: 100,
				delayOut: 100			
			});
			
		});
	</script>
	
</head>

<!--[if IE 7 ]>    <body class="ie7 ie"> <![endif]--> 
<!--[if IE 8 ]>    <body class="ie8 ie"> <![endif]--> 
<!--[if !IE]><!--> <body> <!--<![endif]-->

	<div id="headercloth"></div>

	<header id="header" class="clearfix">
		<div class="wrap">
	
			<div id="logo" class="left">
				<a href="index.html">
					SushiThai
					<img src="images/logo.png" alt="SushiThai" />
				</a>
			</div>

						
			<div id="nav">

				<nav class="jquery-menu clearfix">
					<ul class="menu">
						<li><a href="index.html">Home</a></li>
						<li class="parent"><a href="entrees.html">Menu</a>
							<ul>
								<li><a href="appetizers.html">Appetizers</a></li>
                                
								<li><a href="entrees.html">Entrees</a></li>
<li><a href="desserts.html">Desserts</a></li>

								<li><a href="drinks.html">Drinks</a></li>
								
								<li><a href="specials.html">Specials</a></li>
							</ul>
						</li>
						

						<li><a href="gallery.html">Gallery</a></li>
						<li class="current active"><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
			
		</div>
	</header>

	<div class="clear"></div>
	<div id="carte">
		<div id="carte-top" class="wrap"></div>
		<div id="content-block" class="wrap">

			<div class="separator top-separator content left"></div>
			<div class="separator top-separator content right"></div>
			
			<div id="main" class="content">

				<h1>Get in touch</h1>

				

				<div id="contact-form-wrap" class="contact down-block">
				
					<form action="contact.php" method="post" name="emailForm" id="emailForm" class="contact-form form-validate">
						
						<input type="text" name="name" id="contact_name" size="30" class="hidevalue inputbox" value="Name" /><br />

						<input type="email" id="contact_email" name="email" size="30" value="Email" class="required email hidevalue" maxlength="100" /><br />

						<input type="text" name="subject" id="contact_subject" size="30" class="hidevalue inputbox required" value="Subject" /><br />

						<label id="contact_textmsg" for="contact_text">Message</label><br />

						<textarea cols="50" rows="10" name="message" id="contact_text" class="hidevalue inputbox"></textarea><br />
						
						

						<br />
						<br />
						
						<button class="button validate" type="submit">Send Email</button>

					</form>
					
				</div>
				
			</div><!-- end main -->
							
			<div class="sidebar content">

				<div class="module">
					<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&amp;q=196+Clint+Dr.+Pickerington,+OH+43147&amp;ie=UTF8&amp;hq=&amp;hnear=196+Clint+Dr,+Pickerington,+Ohio+43147&amp;gl=us&amp;t=m&amp;z=16&amp;iwloc=A&amp;ll=39.920253,-82.781854&amp;output=embed"></iframe>
				</div>
				
				<div class="separator clear"></div>

				
				<div class="module">
					<h3>Easy to find</h3>

					<ol>
						<li>Only 1 mile south of I 70 Exit.</li>
						<li>Near corner of 256 (Hill Rd) and Crosscreeks Blvd.</li>
						
					</ol>
				</div>
				
				<div class="separator clear"></div>
				
				<div class="module"><h3>General Information</h3>
					<p>Address: 196 Clint Dr. Pickerington, OH 43147<br>
Phone: 614-866-3813<br>
Fax: 614-866-4959</p>
				</div>

				
			</div><!-- end sidebar -->

			<div class="clear left content">
				<div class="separator"></div>

				<div class="small carte-footer">
					<p>Business Address: <strong>196 Clint Dr. Pickerington, OH 43147</strong><br/>

Business Phone: <strong>614-866-3813</strong>

 </p>
				</div>
			</div>

			
			<div class="right content">
				<div class="separator"></div>
				
				<div class="small carte-footer">
					<form action="#" method="post" id="search-form">
						<!--
						<div class="search-wrap">
							<input name="searchword" maxlength="50" class="hidevalue search-field inputbox" type="search" size="50" value="Search..." />
							<input type="submit" value="" class="search-button-image" onclick="this.form.searchword.focus();" />
						</div>-->
					</form>
				</div>
			</div>			
		</div><!-- end #content-block -->
		
		<div id="carte-bottom" class="clear wrap"></div>
	</div><!-- end #carte -->
	
	<footer id="footer" class="dark-zone">
				
			<div id="fmodules" class="wrap">

				<div class="module fmodule col-module col-module-first"></div>
				
				<div class="module fmodule col-module"></div>
				
				<div class="module fmodule col-module"></div>
				
				<div class="module fmodule col-module col-module-last">
					<div>
						<h3>We accept all cards</h3>
						<p><img src="demo_images/credit-cards.png" class="left" style="margin: 0 15px 15px 0;" />
						No cash? No problem! You won't have to wash dishes.</p>
					</div>

				</div>
				
				<div class="clear"></div>
			</div><!-- end fmodules -->
						
			<div id="footer-info">
				<div class="wrap relative">
					
					<div class="footer-left left">
							
						
			
					</div>
										
					<div class="footer-right right">
						<p>Made by <a href="http://www.typeserve.com">Typeserve Websolutions Group, Dublin, OH. 2012</a>.<br />

						</p>
					</div>
					
				</div>
			</div><!-- end footer-info -->
			
		</footer><!-- end footer -->
	
	
	<script src="js/jquery.colorbox-min.js"></script>
	<script src="js/jquery.validity.pack.js"></script>
	<script src="js/jquery.nivo.slider.pack.js"></script>

	
	<script>
	jQuery(function(){
		captions();
		zebratables();
		hoverTables();
		pullquote();

		jQuery("a[rel*='lightbox']").colorbox({
			'opacity' : .5
		});

		jQuery.validity.setup({ outputMode:"modal" });
		
		var form = jQuery('form.form-validate');
		if( form.length > 0 ){
			// A general validation for forms
			form.validity(function(){
				jQuery('input.required').require();
				jQuery('textarea.required').require();
				jQuery('input[type="email"]').require().match('email');
				jQuery('input.required[type="url"]').require().match('url');
				jQuery('input[type="password"]').equal();
			});
		};
		userLinks();
		fades();
		inputValues();
	});
	
	jQuery(window).load(function(){
	
		jQuery('#slider').nivoSlider({
			effect : 			'fade',
			animSpeed : 		500, 	// Slide transition speed
			pauseTime : 		3000, 	// How long each slide will show
			captionOpacity : 	0.8, 	// Universal caption opacity
			prevText : 			'', 	// Prev directionNav text
			nextText : 			'', 	// Next directionNav text
			controlNav : 		false 	// 1,2,3... navigation
		});
	});
	</script>

</body>
</html>