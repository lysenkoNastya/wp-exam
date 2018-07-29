<?php
/**
 * Template name: Blog
 * The template for displaying portfolio.
 *
 * @package understrap
 */
get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<section class="breadcrumbs-search">
    <div class="container">
        <div class="col-sm-5 d-inline-block">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
        </div>
        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="col-sm-6 d-inline-block text-right" >
            <input type="text" placeholder=" Search" value="<?php echo get_search_query() ?>" name="s" id="s" />
        </form>
    </div>
</section>


<section class="blog-section-main">
    <div class="container">
        <div class="blog-section-main-content row">
            <ul class="blog-section-list align-content-center d-flex flex-wrap  col-sm-10">
                 <?php while ( have_posts() ) : the_post(); ?>
                    <li class="blog-section-list-item row">
                        <a href="<?php the_permalink(); ?>" class="list-item-text-block-link d-inline-block col-sm-5">
                           <?php the_post_thumbnail();?>
                        </a>
                        <div class="blog-info col-sm-7">
                            <h2 class="">
                                <a class="blog-item-link d-block text-left" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <span class="by-devider">
                                <?php __('by', 'understrap-child'); ?>
                            </span>
                            <a  class="" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
                                <?php echo get_the_author_meta( 'display_name'); ?>
                            </a>
                            <span class="date"><?php echo get_the_date('d M, y'); ?></span>
                             <?php the_excerpt(); ?>
                         </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
        <?php the_posts_pagination(); ?>
    </div>
</section>


</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
