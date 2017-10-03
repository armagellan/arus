<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

    <!-- Slider on Front Page -->
    <?php echo do_shortcode('[rev_slider home]');?>
    
    <div class="form-call">
        <?php echo do_shortcode('[contact-form-7 id="69" title="Замовити дзвінок"]');?>
    </div>
    
    <!-- Blocks with categories -->
    <div class="block-row front-page-category">
        <div class="block-three">
            <div class="category-list">
                <header class="category-list-header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>printers">ПРИНТЕРИ</a></header>
                <hr>
                <?php wp_nav_menu( array(
            		'theme_location' => 'printers',
            		'menu_id'        => 'category-printers',
            	) ); ?>
            </div><!-- .category-list -->
        </div><!-- .block-three -->
        <div class="block-three">
            <div class="category-list">
                <header class="category-list-header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>computers">КОМП’ЮТЕРИ</a></header>
                <hr>
                <?php wp_nav_menu( array(
            		'theme_location' => 'computers',
            		'menu_id'        => 'category-computers',
            	) ); ?>
            </div><!-- .category-list -->
        </div><!-- .block-three -->
        <div class="block-three">
            <div class="category-list">
                <header class="category-list-header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>notebooks">НОУТБУКИ</a></header>
                <hr>
                <?php wp_nav_menu( array(
            		'theme_location' => 'notebooks',
            		'menu_id'        => 'category-notebooks',
            	) ); ?>
            </div><!-- .category-list -->
        </div><!-- .block-three -->
        <div class="block-three">
            <div class="category-list">
                <header class="category-list-header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>administrations">АДМІНІСТРУВАННЯ</a></header>
                <hr>
                <?php wp_nav_menu( array(
            		'theme_location' => 'administration',
            		'menu_id'        => 'category-administration',
            	) ); ?>
            </div><!-- .category-list -->
        </div><!-- .block-three -->
    </div><!-- .block-row -->
    <!-- / Blocks wiht categories -->
		
    <!-- Blocks with short info -->
    <div class="block-row">
		<?php $postsk = get_posts ("category=12&orderby=date&order=ASC&numberposts=6"); ?>
		<?php if ($postsk) : ?>
			<?php foreach ($postsk as $post) : setup_postdata ($post); ?>
        		<div class="block-six">
        		    <?php the_content(); ?>
        		</div><!-- .block-six -->
	            <?php endforeach; ?>
		    <?php wp_reset_postdata(); ?>
		<?php endif; ?>	
    </div><!-- .block-row -->
    <!-- / Blocks wiht short info -->
    
    <!-- Blocks with video & news -->
    <div class="block-row">
        
        <div class="block-six">
            <iframe height="300" style="width:100%; box-shadow: 0 0 5px 2px rgba(0,0,0,0.25);" src="https://www.youtube.com/embed/lxgDdNXe4KA" frameborder="0" allowfullscreen></iframe>
		</div><!-- .block-six -->
		
		<div class="block-six">
		    <div class="block-news">
		        <div class="news-header">
		            <a href="#">ОСТАННІ НОВИНИ ТА АКЦІЇ</a>
		        </div><!-- .news-header -->
		        <hr>
                <div class="news-content">
    				<?php $postsk = get_posts ("category=10&orderby=date&order=ASC&numberposts=3"); ?>
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
    				<a class="link-page" href="<?php echo esc_url( home_url( '/' ) ); ?>news">Усі новини та акції</a>	
    			</div><!-- .news-content -->
		    </div><!-- .block-news -->
		</div><!-- .block-six -->
    
    </div><!-- .block-row -->
    <!-- / Blocks wiht video & news  -->
    
    <!-- Blocks with articles & comments -->
    <div class="block-row">
		
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
    
    </div><!-- .block-row -->
    <!-- / articles & comments  -->
    
    <!-- Blocks with general info -->
    <div class="block-row general-text">
		<?php $post = get_post(131); ?>
		<?php if ($post) : ?>
		    <div class="block-twelve">
    		    <h1><?php echo $post->post_title; ?></h1>
    		</div><!-- .block-twelve -->
		    <?php echo $post->post_content; ?>
		<?php endif; ?>	
    </div><!-- .block-row -->
    <!-- / Blocks wiht general info -->

</div><!-- .wrap -->

<?php get_footer();
