<?php get_header(); ?>

	<div  id="body" class="body" role="main">
		<div class="block_fullwidth">
			<div class="wrap">
				<div class="row">

					<div id="main_column" class="col-sm-9 col-xs-12 pull-left main_column page_list">
						<!-- section -->
						<section>

							<h1><?php the_title(); ?></h1>

						<?php if (have_posts()): while (have_posts()) : the_post(); ?>

							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<?php the_content(); ?>

								<?php comments_template( '', true ); // Remove if you don't want comments ?>

								<br class="clear">

								<?php edit_post_link(); ?>

							</article>
							<!-- /article -->

						<?php endwhile; ?>

						<?php else: ?>

							<!-- article -->
							<article>

								<h2><?php _e( 'Sorry, nothing to display.', 'basic' ); ?></h2>

							</article>
							<!-- /article -->

						<?php endif; ?>

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