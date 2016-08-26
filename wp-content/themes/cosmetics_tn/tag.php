<?php get_header(); ?>

	<div  id="body" class="body" role="main">
		<div class="block_fullwidth">
			<div class="wrap">
				<div class="row">

					<div id="main_column" class="col-sm-9 col-xs-12 col-xs-12 pull-left main_column page_list">
						<!-- section -->
						<section>

							<h1><?php _e( 'Tag Archive: ', 'basic' ); echo single_tag_title('', false); ?></h1>

							<?php get_template_part('loop'); ?>

							<?php get_template_part('pagination'); ?>

						</section>
					<!-- /section -->
					</div>

					<!-- left column -->
					<div id="sidebar_left_area"class="col-sm-3 col-xs-12 col-xs-12 pull-right ">
						<?php get_sidebar('left' ); ?>
					</div>
					<div class="clear"></div>					
				</div>
			</div>
		</div>	
	</div>

<?php get_footer(); ?>