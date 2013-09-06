<?php
/**
 * The Template for displaying all single posts.
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
                        <?php the_pagetitle(); ?>
                    </div>        
                </div>  
                <!--//page_title-->   
                <?php while ( have_posts() ) : the_post(); ?>
    				<?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'single-post-thumbnail' ); ?>     
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="border-bottom:0; margin-bottom:10px;">
                        <div class="post-entry-meta">
                             <ul>
                             	<li class="post_date"><?php the_time('F dS, Y'); ?></li>
                                <li class="separator">/</li>
                             	<li class="post_author">Author: <?php the_author_posts_link() ?></li>
                                <li class="separator">/</li>
                                <li class="post_category">Categories: <?php the_category(', ') ?></li>
                                <li class="separator">/</li>
                                <li class="post_comment">Comments: <a href="<?php echo get_comments_link(); ?>"><?php echo comments_number( '0', '1', '%' ); ?></a></li>                                      
                             </ul>
                        </div><!-- //entry-meta -->
                        <div class="post_img"><img alt="" src="<?php bloginfo('template_url'); ?>/timthumb/timthumb.php?src=<?php echo $featured_image[0]; ?>&w=770&h=540" /></div>        
                        <div class="entry-content">
                            <?php the_content(); ?>                               
                        </div><!-- .entry-content -->                    
                    
                    </div><!-- #post-## -->
                    
                    <nav class="nav-single oldernewer">
                        <h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
                        <span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
                        <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
                    </nav><!-- .nav-single -->
    
                    <?php comments_template( '', true ); ?>
    
                <?php endwhile; // end of the loop. ?>
    
            </div><!-- .span9 -->
            
            <?php get_sidebar(); ?>
    		
    	</div>
    </div>

<?php get_footer(); ?>