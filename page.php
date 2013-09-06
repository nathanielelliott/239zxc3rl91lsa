<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div class="container">
    	<div class="row">
        	<div id="primary" class="span9">
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
            </div><!-- .span9 -->
            
            <?php get_sidebar(); ?>
    		
    	</div>
    </div>

<?php get_footer(); ?>