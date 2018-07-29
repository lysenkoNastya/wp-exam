

<section class="text-center" style="background-image:url('<?php echo get_theme_mod( 'bg_front_page' );?>'); ">


<?php
/**
 * Template Name: Home
 *
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

    <div class="container">
        <div class="section-header">
            <?php if( get_field('title') ): ?>
                <header>
                    <h2 class="title title-marg">
                        <?php the_field('title'); ?>
                    </h2>
                </header>
            <?php endif; ?>
            <?php if( get_field('sub_title') ): ?>
                <p class="sub-title">
                    <?php the_field('sub_title'); ?>
                </p>
            <?php endif; ?>
            <?php if( get_field('link_text') ): ?>
                <a class="btn" href="<?php the_field('link'); ?>">
                    <?php the_field('link_text'); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="section-process text-center">
    <div class="container"
        <?php if( get_field('title_section2') ): ?>
            <header class="text-center">
                <h2 class="title title-border d-inline-block">
                    <?php the_field('title_section2'); ?>
                </h2>
            </header>
        <?php endif; ?>
        <ul class="section-process-list text-center row">
            <?php if( get_field('image1_section2') ): ?>
                <li class="section-process-item col-sm-4">
                    <a class="offering-list-item-link" href="#">
                        <img src="<?php the_field('image1_section2'); ?>" alt="block_image1">
                    </a>
                    <h3 class="section-process-item-title">
                       <?php the_field('title_item3_section2'); ?>
                    </h3>
                    <p class="section-process-text">
                        <?php the_field('text_item3_section2'); ?>
                    </p>
                </li>
            <?php endif; ?>
            <?php if( get_field('image2_section2') ): ?>
                <li class="section-process-item col-sm-4">
                    <a href="#">
                       <img src="<?php the_field('image2_section2'); ?>" alt="block_image2">
                    </a>
                    <h3 class="section-process-item-title">
                       <?php the_field('title_item2_section2'); ?>
                    </h3>
                    <p class="section-process-text">
                        <?php the_field('text_item2_section2'); ?>
                    </p>
                </li>
            <?php endif; ?>
            <?php if( get_field('image3_section2') ): ?>
                <li class="section-process-item col-sm-4">
                    <a href="#">
                        <img src="<?php the_field('image3_section2'); ?>" alt="block_image3">
                    </a>
                    <h3 class="section-process-title">
                        <?php the_field('title_item3_section2'); ?>
                    </h3>
                    <p class="section-process-text">
                        <?php the_field('text_item3_section2'); ?>
                    </p>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</section>

<section class="section-about">
    <div class="container">
        <ul class="section-about-list text-center row">
            <li class="section-about-item col-sm-6">
                <h3 class="title title-border d-inline-block">
                    <?php the_field('about_title'); ?>
                </h3>
                <p class="section-about-text">
                    <?php the_field('about_text'); ?>
                </p>
                <a class="read-more-text" href="<?php the_field('about_link'); ?>">
                    <?php the_field('about_link_text'); ?>
                </a>
            </li>
            <?php if( get_field('about_img') ): ?>
                <li class="section-about-item col-sm-6">
                   <img src="<?php the_field('about_img'); ?>" alt="block_image2">
                </li>
            <?php endif; ?>
        </ul>
    </div>
</section>

<section class="section-families text-center">
    <div class="container">
        <?php if( get_field('title_families') ): ?>
            <header class="text-center">
                <h2 class="title title-border d-inline-block">
                    <?php the_field('title_families'); ?>
                </h2>
            </header>
        <?php endif; ?>
        <?php $query = new WP_Query(array('post_type' => 'families'));
            if ($query->have_posts()) { ?>
                <ul class="families-list text-center row">
                    <?php while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <li class="families-list-item col-sm-4">
                            <div class="wrapper-block">
                                <div class="wrapper-overlay ">
                                    <div class="families-hover-block ">
                                        <a href="<?php the_permalink(); ?>" class="families-list-item-image">
                                            <?php the_post_thumbnail(); ?>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <span>
                                <?php the_excerpt(); ?>
                            </span>
                        </li>
                    <?php } ?>
                </ul>
                <?php
            }
            wp_reset_postdata();
            ?>
        <a class="read-more-text" href="<?php echo get_post_type_archive_link( 'families_link' ); ?>"><?php the_field('families_link_text'); ?></a>
    </div>
</section>

<section class="section-testimonials text-center">
    <div class="container"
        <?php if( get_field('testimonials_title') ): ?>
            <header class="text-center">
                <h2 class="title title-border d-inline-block">
                    <?php the_field('testimonials_title'); ?>
                </h2>
            </header>
        <?php endif; ?>
        <?php $query = new WP_Query(array('post_type' => 'testimonials'));
        if ($query->have_posts()) { ?>
            <ul class="families-list text-center row">
                <?php while ($query->have_posts()) {
                    $query->the_post(); ?>
                    <li class="families-list-item col-sm-6">
                        <div class="wrapper-block row">
                            <a href="<?php the_permalink(); ?>" class="offset-sm-1 families-list-item-image col-sm-2">
                                <?php the_post_thumbnail(); ?>
                            </a>
                            <div class="families-list-item-info col-sm-9 text-left">
                                <span>
                                    <?php the_content(); ?>
                                </span>
                                <span class="by-devider">
                                    <?php __('by', 'understrap-child'); ?>
                                </span>
                                <a  class="info-block-name" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
                                    <?php echo get_the_author_meta( 'display_name'); ?>
                                </a>
                                <div class="d-inline-block">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <?php
        }
        wp_reset_postdata();
        ?>
            <a class="read-more-text" href="<?php echo get_post_type_archive_link( 'families_link' ); ?>"><?php the_field('families_link_text'); ?></a>
    </div>
</section>

<section class="section-build text-center" style="background-image:url('<?php echo get_theme_mod( 'bg_front_page_build' );?>'); ">
    <div class="container">
        <div class="text-left row">
            <div class="col-sm-5">
                <?php if( get_field('build_title') ): ?>
                    <header>
                        <h2 class="title">
                            <?php the_field('build_title'); ?>
                        </h2>
                    </header>
                <?php endif; ?>
                <?php if( get_field('build_text') ): ?>
                    <p class="sub-title">
                        <?php the_field('build_text'); ?>
                    </p>
                <?php endif; ?>
                <?php if( get_field('buil_link_text') ): ?>
                    <a class="btn" href="<?php the_field('buil_link'); ?>">
                        <?php the_field('buil_link_text'); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
