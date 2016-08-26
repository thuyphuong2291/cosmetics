	<?php get_header(); ?>
	<!-- body -->
	<div id="body" class="body" role="main">

		<!-- feature -->
		<div id="feature_top" class="block_fullwidth">
		</div>
		<!-- /feature -->
		
		<!-- Block -->
		<?php 
			// showBlockHome('pos1');
			// showBlockHome('pos2');
			// showBlockHome('pos3');
			// showBlockHome('pos-keep-in-touch');
			// showBlockHome('pos4');
			// showBlockHome('pos-contact-us');
		 ?>
		<!-- /Block -->

		<!-- lastest new -->
		<div id="new_product" class="block_fullwidth">
			<div class="wrap block_center">
				<h2 class="title"><?php _e( 'lastest project', 'hoaphu' ); ?></h2>
				<div class="content_block">
					<?php //showSliderPostType('carousel', 'product', 16, 4); ?>
					<?php //showSliderPostType('carousel_mobi', 'product', 8, 2); ?>				   			    
				</div>
			</div>
		</div>
		<!-- /lastest new  -->
				
	</div>
	<!-- /body -->

	<?php get_footer(); ?>