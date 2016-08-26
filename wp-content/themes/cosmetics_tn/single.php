<?php get_header(); ?>

	<div  id="body" class="body" role="main">
		<div class="block_fullwidth">
			<div class="wrap">
				<div class="row">

					<div id="main_column" class="col-sm-9 col-xs-12 pull-left main_column page_list">
						<section>

						<?php if (have_posts()): while (have_posts()) : the_post(); ?>

							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<!-- post thumbnail -->
								<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail(); // Fullsize image for the single post ?>
									</a>
								<?php endif; ?>
								<!-- /post thumbnail -->

								<!-- post title -->
								<h1><?php the_title(); ?></h1>
								<!-- /post title -->

								<!-- post details -->
								<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
								<span class="author"><?php _e( 'Published by', 'basic' ); ?> <?php the_author_posts_link(); ?></span>
								<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'basic' ), __( '1 Comment', 'basic' ), __( '% Comments', 'basic' )); ?></span>
								<!-- /post details -->

								<?php the_content(); // Dynamic Content ?>

								<?php the_tags( __( 'Tags: ', 'basic' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

								<p><?php _e( 'Categorised in: ', 'basic' ); the_category(', '); // Separated by commas ?></p>

								<p><?php _e( 'This post was written by ', 'basic' ); the_author(); ?></p>

								<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

								<?php comments_template(); ?>

							</article>
							<!-- /article -->

						<?php endwhile; ?>

						<?php else: ?>

							<!-- article -->
							<article>

								<h1><?php _e( 'Sorry, nothing to display.', 'basic' ); ?></h1>

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