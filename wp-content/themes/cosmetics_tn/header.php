<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	<script>
    // conditionizr.com
    // configure environment tests
    conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
    });
    </script>
</head>
<body <?php body_class(); ?>>

<div class="wrapper">
	<!-- header -->
	<header id="header_cover" class="header_cover">
		
		<!-- header_txt -->
		<div id="header_txt" class="header_txt block_fullwidth">
			<div class="wrap">
				<div class="suport_info_txt">
					<?php //showHeaderTxt(); ?>
				</div>	

				<div class="language_social pull-right" id="language_social">

					<nav id="social_head" class="social">
						<?php //showSocialLinks(); ?>	
					</nav>

					<ul class="language_switcher" id="language_switcher">
						<?php //pll_the_languages(array('show_flags'=>1,'show_names'=>0));?>
					</ul>		

				</div>
			</div>
		</div>
		<!-- /header_txt -->

		<!-- logo/menu -->
		<div id="menu_area" class="menu_area block_fullwidth">
			<div class="wrap">
				<div id="logo" class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php header_image(); ?>" alt="Logo" class="logo-img">
					</a>
				</div>
				<div class="global_menu pull-right" id="global_menu">
					<nav id="global_nav" class="global_nav" role="navigation">
						<ul id="language_smp" class="language_smp"><?php //pll_the_languages(array('show_flags'=>1,'show_names'=>0));?></ul>
						<?php 
							$args_menu = array(
								'menu_pos' => 'header-menu' 
								// 'menu_id' => 'top_menu',
								// 'menu_class' => 'menu menutop', 
								// 'items_wrap' => 'nav', 
								// 'before_after' => 'span', 
								// 'link_before_after' => 'label'
							);
							show_navigator($args_menu);
						?>						
					</nav>
					<a href="javascript:void(0)" id="menu_btn_smp"><img src="<?php echo bloginfo('template_url');?>/images/icons/menu.png" alt=""></a>
				</div>
			</div>			
		</div>
		<!-- logo/menu -->
		<div class="clear"></div>
	</header>
	<!-- /header -->