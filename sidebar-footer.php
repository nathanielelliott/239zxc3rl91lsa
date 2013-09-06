<?php
/**
 * The sidebar containing the footer page widget areas.
 *
 * If no active widgets in either sidebar, they will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * The footer page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if (   ! is_active_sidebar( 'first-footer-widget-area'  )
		&& ! is_active_sidebar( 'second-footer-widget-area' )
		&& ! is_active_sidebar( 'third-footer-widget-area'  )
		&& ! is_active_sidebar( 'fourth-footer-widget-area'  )
	)
		return;

// If we get this far, we have widgets. Let do this.
?>
<div id="footer-widget-area" role="complementary">
    <div class="wrap site">
        <div class="container">
            <div class="row">
                <div class="span3">
                	<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
                        <div id="first" class="widget-area">
                            <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                            <div class="logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/logo_foot.png" alt="" /></a>
                            </div>
                        </div><!-- #first .widget-area -->
                    <?php endif; ?>
                </div>
                <div class="span3">
                    <?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
                        <div id="second" class="widget-area">
                            <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                        </div><!-- #second .widget-area -->
                    <?php endif; ?>
                </div>
                <div class="span3">
                    <?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
                        <div id="third" class="widget-area">
                            <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
                        </div><!-- #third .widget-area -->
                    <?php endif; ?>
                    <div class="clear"></div>
                </div>
                <div class="span3">
                    <?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
                        <div id="fourth" class="widget-area">
                            <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
                        </div><!-- #fourth .widget-area -->
                    <?php endif; ?>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #footer-widget-area -->