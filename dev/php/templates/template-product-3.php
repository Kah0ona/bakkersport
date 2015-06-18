<?php
/*
Template Name: Product-page-3
*/
?>

<?php get_header(); ?>

<div class="product-container">
		
</div>
<div class="scheme1-invert merken-2">
	<div class="u-gridContainer">
		<a href="/home">HOME</a><a href=""> / </a><a href="">SHOWROOM</a>
	</div>

</div>
<div class="img-menu slideDown">
	<div class="u-gridContainer">
		<ul class="tabs">
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/box.png">Overstocks</li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/box.png">Monsterpartijen</li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/box.png">Pre-Orders</li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/box.png">Directe Vooraad</li>
		</ul>
	</div>
</div>
<div class="u-gridContainer marg-product">
		<!--<div clas="u-gridRow" style="height:150px;">

		</div>-->
	<div class="white-bg">
		<div clas="u-gridRow">
			<div class="u-gridCol5">
				<div class="white-border marg">
					<div style="background:white; padding:20px;">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h2 class="no-marg"><?php the_title() ?></h2>
						<?php the_content() ?>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
			<div class="u-gridCol7">
				<div class="white-border marg">
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
