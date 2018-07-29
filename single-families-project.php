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

<section class="section-families">
    <div class="container">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        <?php $query = new WP_Query(array('post_type' => 'families-project'));
            if ($query->have_posts()) { ?>
                <?php while ($query->have_posts()) {
                    $query->the_post(); ?>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <?php the_field('video'); ?>
                            </div>
                            <div class="col-sm-6 col-12">
                                <span class="d-block">
                                   <?php the_field('sponsor'); ?>
                                </span>
                                <h4 class="d-block">
                                  <?php the_field('sponsor_title'); ?>
                                </h4>
                                <div id="slider" class="d-block"></div>
                                <a class="btn section-families-btn" href="<?php the_field('link'); ?>">
                                    <?php the_field('link_text'); ?>
                                </a>
                            </div>
                        </div>
                <?php } ?>
            <?php
            }
        wp_reset_postdata();
        ?>
    </div>
</section>

<section class="section-families text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php the_title(''); ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php the_title(''); ?></a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><?php  the_field('tabs1_text'); ?></div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><?php the_field('tabs2_text'); ?></div>
                </div>
            </div>
            <aside class="blog-section-aside col-lg-3 col-sm-5 d-inline-block">
                <div>
                    <?php dynamic_sidebar( 'families-project' ); ?>
                </div>
            </aside>
        </div>
    </div>
</section>


<?php get_footer(); ?>