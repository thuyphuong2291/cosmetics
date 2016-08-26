<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<div class="col-xs-6 col_w_100 block_list">
		<!-- post thumbnail -->
		<div class="thumbnail_list">
			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
			<?php 
				else:?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/img_default.jpg" alt="img_default">
					</a>
				
				<?php
			endif; ?>
		</div>
		<!-- post title -->
		<h4>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h4>
	</div>
<?php endwhile; ?>

<?php else: ?>
	<h2><?php _e( 'Sorry, nothing to display.', 'basic' ); ?></h2>
<?php endif; ?>
