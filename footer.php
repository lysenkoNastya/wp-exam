<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">
        <footer class="site-footer" id="colophon">
            <div class="site-info">
                <section class="footer-logo-section">
                    <div class="<?php echo esc_attr( $container ); ?> row">
                        <div class="footer-logo text-center col-sm-4">
                            <?php if ( ! has_custom_logo() ) { ?>
                                <?php if ( is_front_page() && is_home() ) : ?>
                                    <h1 class="navbar-brand mb-0">
                                        <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?>
                                        </a>
                                    </h1>
                                <?php else : ?>
                                    <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                                <?php endif; ?>
                            <?php } else {
                                the_custom_logo();
                            } ?><!-- end custom logo -->
                        </div>
                         <section class="footer-top-section col-sm-8">
                            <div class="row">
                                <div class="<?php echo esc_attr( $container ); ?> col-sm-6">
                                    <?php dynamic_sidebar( 'Footer-top-menu' ); ?>
                                 </div>
                                 <div class="<?php echo esc_attr( $container ); ?> col-sm-6">
                                     <?php dynamic_sidebar( 'Footer-top-mail-chimp' ); ?>
                                  </div>
                             </div>
                        </section>
                    </div>
                </section>
                <section class="footer-text-bottom">
                    <div class=" d-flex justify-content-between d-inline-block">
                        <?php dynamic_sidebar( 'footer-bottom' ); ?>
                    </div>
                </section>
            </div><!-- .site-info -->
        </footer><!-- #colophon -->
	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

