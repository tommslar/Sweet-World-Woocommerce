<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_sweet
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'custom_sweet' ); ?></a>

	<header id="masthead" class="site-header">

		<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"> <!--fixed-top -->
      <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          	<?php 
          	$menu_items = wp_get_nav_menu_items('shop_menu');
          	if(isset($menu_items)){
        		foreach ( (array) $menu_items as $key => $menu_item ) {
            ?>
            <li class="nav-item">
              <a class="nav-link milink" href=<?php echo $menu_item->url; ?>>  <?php echo $menu_item->title; ?> </a>
            </li>
            <?php 
        		}
			}
			?>
            
          </ul>
        </div>
      </div>
    </nav>


	</header><!-- #masthead -->

	<div id="content" class="site-content container">
