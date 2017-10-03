<?php
/**
 * Template part for displaying page content in page-printer.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
	    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
    </div>
	<div class="entry-content">
	    <div class="block-four block-right">
            <div class="category-list">
                <?php global $post; ?>
                <?php $pageid = $post->ID; ?>
                <?php switch($pageid) {
                    case ( $pageid == '135' || '135' == $post->post_parent ): ?>
                        <header class="category-list-header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>printers">ПРИНТЕРИ</a></header>
                        <hr>
                        <?php wp_nav_menu( array(
                    		'theme_location' => 'printers',
                    		'menu_id'        => 'category-printers',
                    	) ); ?>
                    <?php	
                    break;
                
                    case (  $pageid == '137' || '137' == $post->post_parent ): ?>
                        <header class="category-list-header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>computers">КОМП’ЮТЕРИ</a></header>
                        <hr>
                        <?php wp_nav_menu( array(
                    		'theme_location' => 'computers',
            		        'menu_id'        => 'category-computers',
                    	) ); ?>
                    <?php	
                    break;
                
                    case ( $pageid == '139' || '139' == $post->post_parent ): ?>
                        <header class="category-list-header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>notebooks">НОУТБУКИ</a></header>
                        <hr>
                        <?php wp_nav_menu( array(
                    		'theme_location' => 'notebooks',
            		        'menu_id'        => 'category-notebooks',
                    	) ); ?>
                    <?php	
                    break;
                
                    case ( $pageid == '141' || '141' == $post->post_parent ): ?>
                        <header class="category-list-header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>administrations">АДМІНІСТРУВАННЯ</a></header>
                        <hr>
                        <?php wp_nav_menu( array(
                    		'theme_location' => 'administration',
            		        'menu_id'        => 'category-administration',
                    	) ); ?>
                    <?php	
                    break;
                    
                    default:
                    echo "default";
                    break;
                } ?>
            	
            </div><!-- .category-list -->
            <div class="form-call">
                <?php echo do_shortcode('[contact-form-7 id="69" title="Замовити дзвінок"]');?>
            </div><!-- .form-call --> 
        </div><!-- .block-three -->
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
