<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */
/*============ THUY =============*/
function storefront_site_title_or_logo() {
	if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
		$logo = get_custom_logo();

		echo $logo = is_home() ? '<h1 class="logo">' . $logo . '</h1>' : $logo;
	} elseif ( function_exists( 'jetpack_has_site_logo' ) && jetpack_has_site_logo() ) {
		jetpack_the_site_logo();
	} else {
		$tag = is_home() ? 'h1' : 'div';

		echo '<' . esc_attr( $tag ) . ' class="beta site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . esc_attr( get_bloginfo( 'name' ) ) . '</a></' . esc_attr( $tag ) .'>';

		if ( '' != get_bloginfo( 'description' ) ) { ?>
			<div class="site-description"><?php echo bloginfo( 'description' ); ?></div>
			<?php
		}
	}
}

/*navigation*/
function storefront_primary_navigation() {
	?>
	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">
	<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span><?php echo esc_attr( apply_filters( 'storefront_menu_toggle_text', __( 'Menu', 'storefront' ) ) ); ?></span></button>
	<div class="menu">
		<ul aria-expanded="false" class="nav-menu">
			
		</ul>
	</div>
	</nav><!-- #site-navigation -->
	<?php
}
/*=========== END THUY ============*/

