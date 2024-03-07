<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Atomic_Improv
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'atomic-improv'); ?>
		</a>

		<header id="masthead" class="site-header">
			<div class="container">
				<div class="header-flex">

					<div class="site-branding">
						<?php
						the_custom_logo();
						?>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<svg width="80px" height="80px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg">
                

								<g id="SVGRepo_bgCarrier" stroke-width="0" />

								<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

								<g id="SVGRepo_iconCarrier">
									<path class="shadow" d="M4 6H20M4 12H20M4 18H20" stroke="#FFFCF5" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round" />
								</g>

							</svg>
						</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id' => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div><!-- .header-flex -->
			</div><!-- .container -->
		</header><!-- #masthead -->