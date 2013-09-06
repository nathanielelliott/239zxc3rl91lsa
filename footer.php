<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
		</div><!-- #main .wrapper -->
	</div><!-- #main_container -->
    
    <footer id="colophon" role="contentinfo">
    	<?php get_sidebar( 'footer' ); ?>
		<div class="site-info site wrap">
			<div class="container">
            	<div class="fleft copyright">&copy; <?php echo (date("Y")); ?> - <?php bloginfo( 'name' ); ?> <span>|</span> All Rights Reserved.</div>
            	<div class="fright">
                	<ul class="social_icons">
                        <li><a class="foot_rss" href="#">RSS Feed</a></li>
                        <li><a class="foot_facebook" href="#">Facebook</a></li>
                        <li><a class="foot_twitter" href="#">Twitter</a></li>
                        <li><a class="foot_flickr" href="#">Flickr</a></li>
                        <li><a class="foot_google" href="#">Google</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
    
</div><!-- #page -->

	<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/myscript.js"></script>
</body>
</html>