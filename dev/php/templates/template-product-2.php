<?php
/*
Template Name: Product-page2
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
<div class="img-menu slideDown">
	<div class="u-gridContainer">
		<ul class="tabs">
			<li class="active" rel="tab1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sneak.png"> Sneakers</li>
			<li rel="tab2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jack.png">Trainingspakken</li>
			<li rel="tab3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/box.png">overstocks</li>
			<li rel="tab4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/box.png">monsterpartijen</li>
			<li rel="tab5"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/box.png">voororders</li>
		</ul>
	</div>
</div>
<div class="u-gridContainer">
	
	<div class="tab_container">
	  <h3 class="d_active tab_drawer_heading" rel="tab1">Tab 1</h3>
	  <div id="tab1" class="tab_content">

	    <?php include 'tab-content.php';?>
	  </div>
	  <!-- #tab1 -->
	  <h3 class="tab_drawer_heading" rel="tab2">Tab 2</h3>
	  <div id="tab2" class="tab_content">
	  	<?php include 'tab-content.php';?>
	  </div>
	  <!-- #tab2 -->
	  <h3 class="tab_drawer_heading" rel="tab3">Tab 3</h3>
	  	<div id="tab3" class="tab_content">
	 		<?php include 'tab-content.php';?>
		</div>
	  <!-- #tab3 -->
	  <h3 class="tab_drawer_heading" rel="tab4">Tab 4</h3>
	  <div id="tab4" class="tab_content">
	  <?php include 'tab-content.php';?>
	  </div>
	  <!-- #tab4 --> 
	  <h3 class="tab_drawer_heading" rel="tab5">Tab 5</h3>
	  <div id="tab5" class="tab_content">
	  	<?php include 'tab-content.php';?>
	  </div>
	  <!-- #tab5 --> 
	</div>
<!-- .tab_container -->
</div>

<?php get_footer(); ?>
