<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>
<div class="scheme1-invert merken-2">
	<div class="u-gridContainer">
		<a href="/home">HOME</a><a href=""> / </a><a href="">CONTACT</a>
	</div>

</div>
<div class="u-gridContainer">
	<div clas="u-gridRow">
		
		<div class="u-gridCol5">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><?php the_title() ?></h2>
			<p>Wilt u contact?<br> Vul hieronder het formulier in en wij laten zo spoedig mogelijk van ons horen.</p>
		</div>
		<div class="u-gridCol7">
			
			<div class="u-gridContainer">
				<h2>Adresgegevens</h2>
				<div class="u-gridCol6 contact-ul">
					<ul>
						<li>Bakkersport Trading</li>
						<li>Jac P Thuisseweg 13</li>
						<li>2408 ER Alphen aan den Rijn</li>
					</ul>
					<img style="width:50px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/nederland.jpg">
				</div>
				<div class="u-gridCol6 contact-ul">
					<ul>
						<li>Email: <a href="mailto:info@bakkersporttrading.nl">info@bakkersporttrading.nl</a></li>
						<li>Tel:   <a href="tel:0172234527">+31 (0) 172234527</a></li>
						<li>Fax:   <a href="tel:0172490209">+31 (0) 172490209</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
	

	<div clas="u-gridRow">
		<div class="u-gridCol5 white-border marg">
			<div class="white-bg-for-box">
				<?php the_content() ?>	
				<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="u-gridCol7">
			<div class="white-border marg"> 
				<div id="map_canvas"></div>
			</div>
		</div>

	</div>

</div>


<?php get_footer(); ?>

