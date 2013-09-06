<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
                        <?php printf( __( 'Category Archives: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
                    </div>        
                </div>  
                <!--//page_title-->	
                
                <?php if ( category_description() ) : // Show an optional category description ?>
                    <div class="archive-meta"><?php echo category_description(); ?></div>
                <?php endif; ?>
				<?php while ( have_posts() ) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'single-post-thumbnail' ); ?>
                        <div class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
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
                        <div class="post_img"><a href="<?php the_permalink(); ?>"><img alt="" src="<?php bloginfo('template_url'); ?>/timthumb/timthumb.php?src=<?php echo $featured_image[0]; ?>&w=700&h=350" /></a></div> 
                        <?php the_excerpt(); ?> 
                        <div class="clear_c"></div>                   
                    </div><!-- //post -->                
                <?php endwhile; // End the post ?>
                
                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
                    <div class="oldernewer">
                      <div class="older fleft">
                        <?php next_posts_link('&laquo; Older Entries') ?>
                      </div><!--.older-->
                      <div class="newer fright">
                        <?php previous_posts_link('Newer Entries &raquo;') ?>
                      </div><!--.newer-->
                      <div class="clear_c"></div>
                    </div><!--.oldernewer-->
                 <?php } ?> 
		

			</div><!-- .span9 -->
            
            <?php get_sidebar(); ?>
    		
    	</div>
    </div>
<?php get_footer(); ?>