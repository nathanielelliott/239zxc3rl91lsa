<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div class="container">
    	<div class="row">
        	<div id="primary" class="span12">

                <article id="post-0" class="post error404 no-results not-found">
                    <!--page_title-->
                    <div class="page_title">        
                        <div class="container">
                            <?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentytwelve' ); ?>
                        </div>        
                    </div>  
                    <!--//page_title-->                    
                        
                    <div class="entry-content">
                        <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwelve' ); ?></p>
                        <?php get_search_form(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-0 -->

			</div><!-- .span12 -->
    		
    	</div>
    </div>

<?php get_footer(); ?>