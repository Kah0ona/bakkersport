<?php
/*
Template Name: Product-page
*/
?>

<?php get_header(); ?>

<div class="product-container">
		
</div>
<div class="scheme1-invert merken-2">
	<div class="u-gridContainer">
		<a href="/home">HOME</a><a href=""> / </a><a href="">OVER ONS</a>
	</div>

</div>
<div class="u-gridContainer">
		<!--<div clas="u-gridRow" style="height:150px;">

		</div>-->
		<div class="white-bg">
			<div clas="u-gridRow">
				<div class="u-gridCol5">
					<div class="">
						<h3>Over Bakkersport trading</h3>
						<p>Bakkersport trading
							Is een Groothandel met meer dan 35 jaar ervaring in de sportbranche.

							Naast de textiel en schoenen van de bekende sportmerken, verkopen wij ook overstocks, monsterpartijen, voororders van diverse andere merken. Deze merken kan u vinden op onze website.

							Alle merken die wij verkopen zijn vrij te verhandelen binnen de EU en 100 % procent origineel.

							Onze showroom is elke werkdag te bereiken tussen 8.30 en 18.00. 
						</p>
						<h4>Garantie</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac suscipit magna, in luctus mauris. 
							Proin rutrum, erat sit amet suscipit consectetur, est ex tempus tellus, quis bibendum lorem nibh id arcu.
						 	Nulla tristique metus in magna lobortis, ac congue elit porta. Pellentesque dictum nibh eget erat maximus, eget porttitor 
						</p>
						<h4>Garantie</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac suscipit magna, in luctus mauris. 
							Proin rutrum, erat sit amet suscipit consectetur, est ex tempus tellus, quis bibendum lorem nibh id arcu.
						 	
						</p>
					</div>
				</div>
				<div class="u-gridCol7">
					<div class="white-border marg-top">
						<div class="Slider">

							<?php

								$args = array(
									'post_type' => 'slides 2',
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
				</div>

			</div>
		</div>
	</div> 
<?php get_footer(); ?>
