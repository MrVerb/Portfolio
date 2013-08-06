<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

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

<?php wp_footer(); ?>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>

</body>
</html>