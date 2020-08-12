<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Merkelijkheid_basis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="google-site-verification" content="3Sg-v44rwzHi6btlU00n_ueFwKnZSyMkOZqhMKT_WJc" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#main_menu" aria-controls="main_menu"
					aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'merkelijkheid' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="#">Merkelijkheid Starter</a>
				<?php
        wp_nav_menu( array(
            'theme_location'    => 'menu-1',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'main_menu',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
			</div>
		</nav>
	</header><!-- #masthead -->
