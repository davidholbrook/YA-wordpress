<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yeah-academy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yeah-academy' ); ?></a>

	<header class="mainHeader">
				<h1 class="yeah-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() ?>/assets/images/YEAHLogo.png" alt="YEAH Logo"/><span>YEAH Academy</span></a></h1>
		<nav id="site-navigation" class="primaryNav">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primaryNav',
				) );
			?>
		</nav>
		<nav id="site-navigation" class="secondaryNav">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'secondaryNav'
				) );
			?>
		</nav>
		<div class="donate">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'donate'
				) );
			?>
		</div>
	</div>

	</header>

	<div class="site-wrapper">
