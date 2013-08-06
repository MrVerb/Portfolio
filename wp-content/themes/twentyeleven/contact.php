<?php
/*
Template Name: Contact
*/
?>

<!DOCTYPE html>

<head>
  <meta charset="utf-8" />
	<title>Ron de Leon - Web Designer/Developer</title>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  
	<link type="text/css" rel="stylesheet" href="/css/1140.css">
	<link type="text/css" rel="stylesheet" href="/css/h5bp.css">
	<link type="text/css" rel="stylesheet" href="/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway+Dots|Sanchez' rel='stylesheet' type='text/css'>



</head>
<body>

<div id="wrapper" class="container">
	<header>
		<div class="row">
			<div class="sevencol logo">
				<div class="name">
				<a href="/"><img src="/images/rd_logo.png" class="header_logo"></a>
				<h1>Ron de Leon<br><span class="my_title">Web developer/designer</span></h1>
				</div>
			</div>
			
			<nav>
			<ul class="header_links">
				<li class="onecol works"><a href="/">Work</a></li>
				<li class="onecol blog"><a href="blog">Blog</a></li>
				<li class="onecol about"><a href="about">About</a></li>
				<li class="onecol last contact"><a href="#" class="active">Contact</a></li>
			</ul>
			</nav>
		</div>
	</header>
</div>
<div class="main container">
	<hr class="row">
	<section class="form row">
		<form action="/mail.php" method="POST">
			<div class="ninecol">
				<div class="row">
					<div class="form_name fivecol">
						<label for="name">Your Name</label>
						<input type="text" id="name" name="name">
					</div>
					<div class="form_email fivecol">
						<label for="email">Your Email</label>
					<input type="text" id="email" name="email">
					</div>
					<div class="clearfix"></div>
					<div style="width: 100%" class="message">
						<label for="message">Your Message</label>
						<textarea rows="5" cols="40" name="message" id="message" class="required" style="width: 77.4%;"></textarea>
					</div>
				</div>
			</div>
			<div class="threecol hitmeup">
			  <h1>Hit me up</h1>
				<p>If you have any questions or project inquiries, drop me a line here.</p> 
					You can also email me @ <a href="mailto:Ronverbal732@gmail.com">Ronverbal732@gmail.com</a>.
			</div>
			<input type="submit" name="submit" id="submit" value="Send">
		</form>
	</section>
</div>
<div id="footer-wrap">
	<div class="footer row">
		<div id="twitter" class="fourcol">
			<h2>Check out what I'm up to</h2>
			<ul id="twitter_update_list"><li>Twitter feed loading</li></ul>
			<a href="https://twitter.com/ronverbal" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @RonVerbal</a>
		</div>
		<div id="social" class="fourcol">
			<h2>Stalk Me</h2>
	        <ul>
				<li id="ic-mail"><a href="http://facebook.com/rvdeleon" title="Facebook" ><img src="/images/facebook_1.png"></a></li>
				<li id="ic-twitter"><a href="http://twitter.com/RonVerbal" title="Follow me on Twitter @RonVerbal"><img src="/images/twitter_2.png"></a></li>
				<li id="ic-dribbble"><a href="http://pinterest.com/ronverb" title="Follow me on Pinterest"><img src="/images/pinterest.png"></a></li>
				<li id="ic-flickr"><a href="http://instagram/ronverb" title="Instagram"><img src="/images/instagram.png"></a></li>
			</ul>
		</div>

	</div>
	
     <hr class="dark">
     <footer>
     <p>© 2012 Ron de Leon</p>
     </footer>

</div> <!-- /footer-wrap --></div>

<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
$(document).ready(function () {

	$('.print').click(function () {
		$('.print_works').fadeIn();
		$('.web_works').fadeOut();
		$(this).addClass('active_choice');
		$('.web_choice').removeClass('active_choice');
	});
	
	$('.web_choice').click(function () {
		$('.web_works').fadeIn();
		$('.print_works').fadeOut();
		$(this).addClass('active_choice');
		$('.print').removeClass('active_choice');
		
	});
});
</script>




</body>
</html>
