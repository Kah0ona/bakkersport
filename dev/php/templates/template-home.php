<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<div class="slider-overlay-box">  
	<div class="slider-overlay">
		<div class="u-gridContainer show-for-large">
			<div class="u-gridCol2 thumbs">
				<div class="product-thumb-home">
					<a href="/kleding_categorieen/jackets/">
						
						<div class="thumb-text">Over Ons</div>
					</a>
				</div>
				<div class="thumb-box">
					<p> Wij hebben al meer dan 35 jaar ervaring in de sportbranche</p>
				</div>
			</div>	
			<div class="u-gridCol2 thumbs">
				<div class="product-thumb-home">
					<a href="/kleding_categorieen/jackets/">
						
						<div class="thumb-text">Ons Assortiment</div>
					</a>
				</div>
				<div class="thumb-box"> 
					<p> Overstocks, monsterpartijen, voororders van diverse merken</p>
				</div>
			</div>	
			<div class="u-gridCol2 thumbs">
				<div class="product-thumb-home">
					<a href="/kleding_categorieen/jackets/">
						
						<div class="thumb-text">Showroom</div>
					</a>
				</div>
				<div class="thumb-box">
					<p> Onze showroom is elke werkdag te bereiken tussen 8.30 en 18.00</p>
				</div>
			</div>	
		</div>
	</div>
	<div class="Slider">

		<?php

			$args = array(
				'post_type' => 'slides',
				'posts_per_page'=>999
			);
			$slides = new WP_Query( $args );
			$num = count($slides);
			$counter = 0;
			if( $slides->have_posts() ) {
				while( $slides->have_posts() ) {
					$slides->the_post();
					$counter++;
					?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						  $image_url = $image[0];
					?>
					<div class="slide" style="">
						<img src="<?php echo $image_url; ?>" />
					</div>
					<?php
				}
			}
		?>
	</div>

</div>
<div class="scheme1-invert merken">
	<div class="u-gridContainer">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/merken.png">
	</div>

</div>
<?php get_footer(); ?>
