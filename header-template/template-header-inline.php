<?php 
/**
 * Header Template Name: Inline
 *
 * Default header template: left logo + right menu
 *
 * @package understrap
 */

	$container = get_theme_mod( 'understrap_container_type' );
	$header_layout = get_theme_mod( 'understrap_header_layout' );
?>
	<header class="wrapper-fluid wrapper-navbar <?php echo $header_layout; ?>" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-toggleable-md  navbar-inverse bg-inverse">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>


					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							
						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						
						<?php endif; ?>
						
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="offcanvas" data-target="#navbarSide" data-canvas="#body_canvas" aria-controls="navbarSide" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- List of Menus before Collapse -->

				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav offset-8',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>


				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'navmenu navmenu-default navmenu-fixed-left offcanvas',
						'container_id'    => 'navbarSide',
						'menu_class'      => 'nav navmenu-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'menu-sidebar-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</header><!-- .wrapper-navbar end -->