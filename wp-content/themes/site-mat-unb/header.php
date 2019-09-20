<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Site_MAT/UnB
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'site-mat-unb' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="left">
			<?php
				$image_attributes = wp_get_attachment_image_src( $attachment_id = 5,'full' );
				if ( $image_attributes ) : ?>
					      <div class="logo">
                        <a href="/" title=""><img src="<?php echo $image_attributes[0]; ?>" alt=""></a>
                      </div>  
				<?php endif; ?>
                
                </div>
                <div class="right">
			<?php
			if ( is_front_page() && is_home() ) :
				?>
			<div class="row row-title"  style='width: 550px'>
				<h1 class="site-title" style="text-align: center;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>

				<p class="site-title" style="text-align: center;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			
				<?php
			endif;

			$site_mat_unb_description = get_bloginfo( 'description', 'display' );
			if ( $site_mat_unb_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $site_mat_unb_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
			</div>
		</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'site-mat-unb' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
