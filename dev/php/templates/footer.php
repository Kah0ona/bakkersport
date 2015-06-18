
<footer class="Footer">
		<div class="u-gridContainer">

			<div class="u-gridCol3">
				<br/><br/>
				<a href="/home"> 
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png">
				</a>
			</div>
			<div class="u-gridCol2">
				<b>Contact</b>
				<ul>
					<li>Jac P Thuisseweg 13</li>
					<li>2408 ER&nbsp;&nbsp;Alphen aan den Rijn</li>
					<li><a href="tel:0172234527">+31 (0) 172234527</a></li>
					<li><a href="tel:0172490209">+31 (0) 172490209</li>
					<li><a href="mailto:info@bakkersporttrading.nl">info@bakkersporttrading.nl</a></li> 
				</ul>
			</div>
			<div class="u-gridCol2">
				<b>Openingstijden</b>
				<ul> 
					<li>ma t/m vrij  08:30- 18:00</li>
					<li>zaterdag  09:00 - 17:00</li>
				</ul>
			</div>
			<div class="u-gridCol2 social">
				<b>Onze App</b><br/><br/>
				<a href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/play.png">
				</a>
			</div>
			<div class="u-gridCol2" style="margin-right:0px;">
				<b>Sitemap</b>
				<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php endif; ?>
			</div>

			
			<div class="Footer-inner u-gridRow">
				
			</div>
			
		</div> 

</footer>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bar.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tabs.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>


  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
