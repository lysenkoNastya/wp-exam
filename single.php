<?php
/**
 *
 * Displays all of the <head> section and everything up till <div id="content">
    *
    * @package understrap
    */
get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>


<div class="wrapper blog-section" id="single-wrapper">
    <section class="blog-section" style="background-image:url('<?php echo get_theme_mod( 'back_image' );?>'); ">
        <div class="container-fluid" >
            <header class="blog-section-header">
                <div class="container">
                    <h2 class="general-title blog-section-header-title "><?php wp_title("", true); ?></h2>
                </div>
            </header>
        </div>
    </section>
	<section class="<?php echo esc_attr( $container ); ?>" tabindex="-1">
		<div class="blog-section-main row">
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
            <div class="blog-section-main-content  col-lg-9 col-sm-6">
                <span class="our-steps-subtitle d-block">
                    <?php echo get_theme_mod( 'blog_subtitle' );?>
                </span>
                <h3 class="our-steps-title d-block">
                    <?php the_title(""); ?>
                </h3>
                <?php while ( have_posts() ) : the_post(); ?>
                   <div class="blog-section-wrapper list-item-text-block text-justify">
                       <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail();?>
                       </a>
                       <h2 class="blog-text-block d-block">
                           <a class="blog-section-list-item-title d-inline-block text-left" href="<?php the_permalink(); ?>">
                               <?php the_title(); ?>
                           </a>
                       </h2>
                       <div class="date-wrapper">
                           <date class="date">
                               <?php echo get_the_date('d-M-Y'); ?>
                           </date>
                       </div>
                        <?php the_content(); ?>
                   </div>

                    <span class="related-posts-icon-link d-inline-block">
                        Related posts
                    </span>

                    <?php
                    $args = array(
                    'numberposts' => 3,
                    'offset' => 0,
                    'category' => 0,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'include' => '',
                    'exclude' => '',
                    'meta_key' => '',
                    'meta_value' =>'',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                    );

                    $recent_posts = wp_get_recent_posts( $args );
                    ?>

                    <div class="row article-related-posts-list">

                        <?php foreach ($recent_posts as $recent_post) { ?>
                            <div class="article-related-posts-list-item col-md-4">
                                <?php
                                    echo get_the_post_thumbnail($recent_post["ID"]);
                                    echo $recent_post["post_title"];
                                ?>
                            </div>
                        <?php }
                            ?>
                        <div  class="blog-section-article-comments">

                            <div class="d-block">

                                <?php
                                        if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                        endif;
                                ?>
                            </div>
                        </div>

                    </div>
                <?php endwhile; ?>
            </div>

	    </div><!-- .row -->

    </section><!-- Container end -->
</div>
<?php get_footer(); ?>
