<?php get_header(); ?>

	<div  id="body" class="body" role="main">
		<div class="block_fullwidth">
			<div class="wrap">
				<div class="row">

					<div id="main_column" class="col-sm-9 col-xs-12 pull-left main_column page_list">
						<h1><?php _e( 'Page not found', 'basic' ); ?></h1>
						<h2>
							<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'basic' ); ?></a>
						</h2>
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