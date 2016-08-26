	<!-- sidebar -->
	<div id="sidebar_cover" class="block_fullwidth">
		<div class="wrap">
			<?php get_sidebar(); ?>
		</div>		
	</div>	
	<!-- /footer -->

	<!-- footer -->
	<footer id="footer_cover" class="footer_cover">

		<!-- footer social links -->
		<div class="block_fullwidth" id="footer_social">
			<div class="wrap">
				<div class="social">
					<?php //showSocialLinks(); ?>	
				</div>
			</div>
		</div>
		<!-- /footer social links -->

		<div class="block_fullwidth footer_links">
			<div class="wrap"  id="footer_list_links">
				<div class="row">
					<div class="col-xs-3 col_w_100">
						<h3 class="title"><?php _e('about us','basic') ?></h3>
						<div class="content_txt">
							<?php //showBlockHome('footer_address'); ?>
						</div>
					</div>						
					<div class="col-xs-3 col_w_100 contact_us">
						<h3 class="title"><?php _e('Contact us','basic'); ?></h3>
						<div class="content_txt">
							<?php //showBlockHome('footer_contact'); ?>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>								
		</div>
		<div class="block_fullwidth">
			<div class="wrap">
				<!-- footer -->
				<footer id="footer" class="footer block_fullwidth" role="contentinfo">

					<!-- copyright -->
					<p class="copyright wrap">
						&copy; <?php echo date('Y'); ?>Copyright <?php bloginfo('name'); ?>. 
					</p>
					<!-- /copyright -->

				</footer>
				<!-- /footer -->
			</div>
		</div>		
	</footer>
	<!-- footer -->
	<div class="wrp_back_top">
		<div class="wrap">
			<a href="javascript:void(0)" id="back_to_top"><span class="glyphicon glyphicon-upload"></span></a>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

<!-- analytics -->
<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');
</script>
</body>
</html>
