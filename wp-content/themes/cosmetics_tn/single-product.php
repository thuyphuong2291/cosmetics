<?php get_header(); ?>

	<div  id="body" class="body" role="main">
		<div class="block_fullwidth">
			<div class="wrap">
				<div class="row">

					<div id="main_column" class="col-sm-9 col-xs-12 pull-left main_column page_list">
						<?php 
						global $post;
						if (have_posts()): while (have_posts()) : the_post();
						$code_product = get_post_meta($post->ID, '_code_product', true); 
						$images_product = get_post_meta($post->ID, 'gallery_data', true); 
					?>

						<!-- article -->
						<article id="product-<?php the_ID(); ?>" <?php post_class(single_project); ?>>
							<h1>
								<?php 
									the_title(); 
									$options = get_option( 'setting_home_settings' );
								?> 								
								
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						        <div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>

								<script src="https://apis.google.com/js/platform.js" async defer>
									  {lang: 'vi'}
									</script>

						        <div class="social_single" style="text-align: right;">
						            <span class="btn_tweet"><a href="https://twitter.com/twitter" class="twitter-share-button" data-show-count="true" data-lang="en">Tweet</a></span>
									<div class="fb-like icon_social" data-href="<?php echo $options['st_facebook_url']; ?>" data-layout="button_count" style="position:relative; top:-6px;"></div>
									<div class="g-plusone" data-size="medium" data-href="<?php the_permalink(); ?>"></div>
					            </div>
							</h1>
							<?php if ( has_post_thumbnail()) :?>
								<div class="img_thumbnail">
									<?php the_post_thumbnail(); ?>
								</div>
							<?php endif; ?>
							<div class="builder_project ">
								<i class="fa fa-cog"></i>
								<?php _e( 'Product Code: ', 'basic' ); ?>
								<span class="code_product"><?php echo $code_product; ?></span>
							</div>
							<div class="info_project">
								<?php the_content();?>
							</div>
							
							<div class="clearfix"></div>
							<?php edit_post_link();?>

						</article>

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h1><?php _e( 'Sorry, nothing to display.', 'basic' ); ?></h1>

						</article>
						<!-- /article -->

					<?php endif; ?>
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