<?php
/*
Template Name: Contactpage2
*/
?>

<?php get_header(); ?>

	<!--<div class="contact-g">
		<div class="adress-info">
			<h4>Adresgegevens</h4>
			<p>Jacobi's</p>
			<p>Lijnbaan 49</p>
			<p>3012 EK Rotterdam</p>
			<p>Email: melle@lokaalgevonden.nl</p>
			<p>Tel: </p>
		</div>
	</div>-->


<div class="product-container-contact">
	<div id="map_canvas"></div>
	<div class="adress2" >
		<div class="u-gridContainer">
			<div clas="u-gridCol6">
				<h4>Adresgegevens</h4>
				<p>BAKKERSPORT</p>
				<p>Jac P Thuisseweg 13</p>
				<p> 2408 ER Alphen aan den Rijn</p>
				<p>Email: info@bakkersporttrading.nl</p>
				<p>Tel: +31 (0) 172234527</p>
			</div>
			<div class="u-gridCol6">
				<div class="" style="padding:20px; color:white;">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>						
					<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
					<?php the_content(); ?>
				
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>

		</div>

		
	</div>	
	
	<!--<div class="u-gridCol4" style="position:absolute; top:110px; right:0px; background:rgba(0, 0, 0, 0.5); position:absolute ">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>						
		<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
		<?php the_content(); ?>
	
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		<?php endwhile; endif; ?>
	</div>
</div>-->
	

<?php get_footer(); ?>

