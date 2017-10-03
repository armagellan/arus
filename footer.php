<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
			    <div class="block-row">
			    
			        <div class="block-three">
			            <ul>
                            <li><a href="">Про наc</a></li>
                            <li><a href="">Акції</a></li>
                            <li><a href="">Питання та відповіді</a></li>
                            <li><a href="">Статті</a></li>
                            <li><a href="">Контакти</a></li>
                        </ul>
			        </div><!-- .block-three -->
			        
			        <div class="block-three">
			            <ul>
                            <li><a href="">Притери</a></li>
                            <li><a href="">Комп'ютери</a></li>
                            <li><a href="">Ноутбуки</a></li>
                            <li><a href="">Адміністрування</a></li>
                        </ul>
			        </div><!-- .block-three -->
			        
			        <!--<div class="block-one">-->
			        <!--</div> .block-one -->

	                <div class="block-three">
		                <ul>
                            <li>Ми в соцмережах</li>
                        </ul>
                        <?php //get_template_part( 'template-parts/footer/footer', 'widgets' );
        				if ( has_nav_menu( 'social' ) ) : ?>
        					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
        						<?php
        							wp_nav_menu( array(
        								'theme_location' => 'social',
        								'menu_class'     => 'social-links-menu',
        								'depth'          => 1,
        								'link_before'    => '<span class="screen-reader-text">',
        								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
        							) );
        						?>
        					</nav><!-- .social-navigation -->
        				<?php endif;
        				//get_template_part( 'template-parts/footer/site', 'info' );?>
	                </div><!-- .block-three -->
	                
	                <div class="block-three">
	                    <ul>
                            <li>79035, Ураїна</li>
                            <li>м.Львів, вул.Водогінна, 2/10</li>
                            <li></li>
                            <li id="p-margin-top">+38(032)244-29-43</li>
                            <li>+38(067)675-29-78</li>
                            <li id="email-dotted">office@arus.org.ua</li>
                        </ul>
	                </div><!-- .block-three -->

    			</div><!-- .block-row -->
    			<div class="block-row">
    			    <div class="block-six" style="height: 50px">
	                    <img class="arus-logo-s" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-s.png" title="Арус" alt="Арус"  height="49" >
	                </div><!-- .block-five -->
	                <div class="block-six">
	                    <p class="footer-top-right-text">Весь зміст, включаючи ідеї оформлення та стиль, є об’єктом авторського права.</p>
                        <p class="footer-top-right-text"> Копіювання та розміщення матеріалів</p>
                        <p class="footer-top-right-text"> на інших сайтах без письмової згоди правовласника не допускається</p>
	                </div><!-- .block-five -->
	            </div><!-- .block-row -->
	            
			</div><!-- .wrap -->
			<div class="footer-bottom">
			    <div class="wrap">
                    <p>Copyright 2009-2017 © Arus.org.ua</p>
                </div><!-- .wrap -->
            </div><!-- .footer-bottom -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
