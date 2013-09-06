<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
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
                       <?php
                            if ( is_day() ) :
                                printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
                            elseif ( is_month() ) :
                                printf( __( 'Monthly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
                            elseif ( is_year() ) :
                                printf( __( 'Yearly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
                            else :
                                _e( 'Archives', 'twentytwelve' );
                            endif;
                        ?>
                    </div>        
                </div>  
                <!--//page_title-->	
				<?php while ( have_posts() ) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
                        <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'single-post-thumbnail' ); ?>
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