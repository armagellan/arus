<?php
/**
 * Template Name: Printer Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
    
	<div id="primary-printer" class="content-area">
		<main id="main" class="site-main" role="main">
            
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page-printer' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<!-- Blocks with articles & comments -->
    <div class="block-row" style="margin-top: 50px">
    
		<div class="block-six">
		    <div class="block-news">
		        <div class="news-header">
		            <a href="#">ВІДГУКИ ПРО НАС</a>
		        </div><!-- .news-header -->
		        <hr>
                <div class="news-content">
	
    			</div><!-- .news-content -->
		    </div><!-- .block-news -->
		</div><!-- .block-six -->
		
		<div class="block-six">
		    <div class="block-news">
		        <div class="news-header">
		            <a href="#">ОСТАННІ СТАТТІ</a>
		        </div><!-- .news-header -->
		        <hr>
                <div class="news-content">
    				<?php $postsk = get_posts ("category=11&orderby=date&order=ASC&numberposts=3"); ?>
    				<?php if ($postsk) : ?>
    					<?php foreach ($postsk as $post) : setup_postdata ($post); ?>
    					    <div class="block-four">
        						<h4><?php the_title(); ?></h4>
        						<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
        						<label><?php echo get_the_date(); ?></label>
    						</div><!-- .block-four -->
    					<?php endforeach; ?>
    			    	<?php wp_reset_postdata(); ?>
    				<?php endif; ?>
    				<?php //wp_reset_postdata(); ?>
    				<a class="link-page" href="<?php echo esc_url( home_url( '/' ) ); ?>articles">Усі статті</a>	
    			</div><!-- .news-content -->
		    </div><!-- .block-news -->
		</div><!-- .block-six -->
    
    </div><!-- .block-row -->
    <!-- / articles & comments  -->
	
	
	<?php //if ( ! is_active_sidebar( 'sidebar-printer' ) ) {
	    //continue;
	//} else { ?>
    	<!--<aside id="secondary-printer" class="widget-area" role="complementary">-->
    	    <?php //dynamic_sidebar( 'sidebar-printer' ); ?>
        <!--</aside> #secondary -->
    <?php //} ?><!-- / else -->
</div><!-- .wrap -->

<?php get_footer();
