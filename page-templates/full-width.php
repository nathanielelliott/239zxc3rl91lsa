<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div class="container">
    	<div class="row">
        	<div id="primary" class="span12">
            	<!--page_title-->
                <div class="page_title">        
                    <div class="container">
                        <?php the_title(); ?>
                    </div>        
                </div>  
                <!--//page_title-->
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>            
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php the_content(); ?>
                            <div class="clear_c"></div>
                        </div><!-- .entry-content -->
                    </div><!-- #post-## --> 
                <?php endwhile; // end of the loop. ?>    
            </div><!-- .span12 --> 		
    	</div>
    </div>

<?php get_footer(); ?>