<?php
/**
 * The template for displaying Author Archive pages.
 *
 * Used to display archive-type pages for posts by an author.
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

		<?php if ( have_posts() ) : ?>

			<?php
				/* Queue the first post, that way we know
				 * what author we're dealing with (if that is the case).
				 *
				 * We reset this later so we can run the loop
				 * properly with a call to rewind_posts().
				 */
				the_post();
			?>

			<!--page_title-->
            <div class="page_title">        
                <div class="container">
                    <?php printf( __( 'Author Archives: %s', 'twentytwelve' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?>
                </div>        
            </div>  
            <!--//page_title-->

			<?php
				/* Since we called the_post() above, we need to
				 * rewind the loop back to the beginning that way
				 * we can run the loop properly, in full.
				 */
				rewind_posts();
			?>

			<?php
			// If a user has filled out their description, show a bio on their entries.
			if ( get_the_author_meta( 'description' ) ) : ?>
			<div class="author-info">
				<div class="author-avatar">
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentytwelve_author_bio_avatar_size', 80 ) ); ?>
				</div><!-- .author-avatar -->
				<div class="author-description">
					<h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2>
					<p><?php the_author_meta( 'description' ); ?></p>
				</div><!-- .author-description	-->
			</div><!-- .author-info -->
			<?php endif; ?>

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

		
		<?php endif; ?>

		</div><!-- .span9 -->
            
            <?php get_sidebar(); ?>
    		
    	</div>
    </div>

<?php get_footer(); ?>