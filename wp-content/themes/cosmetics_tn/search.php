<?php get_header(); ?>

	<div  id="body" class="body" role="main">
		<div class="block_fullwidth">
			<div class="wrap">
				<div class="row">

					<div id="main_column" class="col-sm-9 col-xs-12 pull-left main_column page_list">
						<!-- section -->
						<section>

							<h1><?php echo sprintf( __( '%s Search Results for ', 'basic' ), $wp_query->found_posts ); echo ' '.get_search_query(); ?></h1>
							
							<?php get_template_part('loop');  ?>	
							<div class="clear"></div>
							<?php get_template_part('pagination'); ?>

						</section>
						<!-- /section -->
					</div>

					<!-- left column -->
					<div id="sidebar_left_area"class="col-sm-3 col-xs-12 pull-right ">
						<?php get_sidebar('left' ); ?>
					</div>	
					<div class="clear"></div>				
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>