<?php
/**
 * Displays header arus site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="arus-site-branding">


		<?php if ( has_nav_menu( 'ontop' ) ) : ?>
			<div class="navigation-ontop">
				<!-- <div class="wrap"> -->
				    <?php get_template_part( 'template-parts/navigation/navigation', 'ontop' ); ?>
				<!--</div><!-- .wrap -->
			</div><!-- .navigation-ontop -->
		<?php endif; ?>
		
		<div class="lang-ontop">
			 <ul>
			    <li class="active-lang">УКР</li>
			    <li><a href="#">РУС</a></li>
			 </ul>
		</div><!-- .lang-ontop -->
		
		<div class="adress-ontop">
			Львів
		</div><!-- .adress-ontop -->


</div><!-- .site-branding -->
