	<div class="Footer">
		<div class="u-gridContainer">
			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>

			<?php endif; ?>
		</div>
	</div>


	<div class="Socket">
		<div class="Footer-inner u-gridContainer u-gridRow">
				<div class="Footer-inner-Logo u-gridCol4">
					<img class="Footer-Left-Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Quality_Groep_logo-final.png"/>
					<p>Fornheselaan 90, 3734GE Den Dolder</p>
				</div>
				<div class="Footer-inner-Text u-gridCol4">
					<h6>Contact &amp; informatie</h6>
					<p>m: 06 22 18 54 09</p>
					<p><a href="mailto:info@quality-groep.nl">info@quality-groep.nl</a></p>

					<p>KvK: 58841660</p>
				</div>
				<div class="Footer-inner-Sitemap u-gridCol4">
					<h6>Sitemap</h6>
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
				</div>
				
		</div>
	</div>
	<div class="Socket2">	
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script>
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->

	<?php wp_footer(); ?>

	</body>
</html>
