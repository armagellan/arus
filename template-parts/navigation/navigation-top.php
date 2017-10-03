<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
	</button>
	
	
    
    <?php //the_custom_logo(); ?>
    <?php if ( is_front_page() ) : ?>
		 <img class="arus-logo-l" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-l.png" title="Арус" alt="Арус"  height="49" style="float:left;">
		 <img class="arus-logo-s" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-s.png" title="Арус" alt="Арус"  height="49" style="float:left;">
	<?php else : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style="float:left;">
		    <img class="arus-logo-l" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-l.png" title="Арус" alt="Арус"  height="49" >
		    <img class="arus-logo-s" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-s.png" title="Арус" alt="Арус"  height="49" >
		</a>
	<?php endif; ?>
	<?php //wp_nav_menu( array(
		//'theme_location' => 'top',
		//'menu_id'        => 'top-menu',
	//) ); ?>
	
	<!-- Arus 18.09.2017  -->	
	<!--<button id="search-toggle" class="search-toggle"></button>-->
    <?php if( is_front_page() ){ 
            //continue;
        } elseif( is_category() ) {
            the_archive_title( '<div class="header-title"><h1>', '</h1></div>' );
        } elseif( is_404() ) {
            echo '<div class="header-title"><h1>';
            echo _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' );
            echo'</h1></div>';
        } else {
            the_title( '<div class="header-title"><h1>', '</h1></div>' ); 
        }
    ?>
    
	<button type="submit" id="search-block-toggle" aria-controls="search-block" aria-expanded="false">
	    <?php echo twentyseventeen_get_svg( array( 'icon' => 'search' ) ); ?>
	    <span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentyseventeen' ); ?></span>
	</button>

	<div id="search-block">
	    <?php get_search_form(); ?>
	    <div class="search-close"></div>
	</div>
	<div class="arus-tel-item"><span>032 244 29 43 </span><span>067 675 29 78 </span></div>
	<!-- / Arus 18.09.2017  -->

	<?php //if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<!--<a href="#content" class="menu-scroll-down"><?php //echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php //_e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>-->
	<?php //endif; ?>
</nav><!-- #site-navigation -->
