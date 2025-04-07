<?php

/**
 * Template Name: Brands Page
 */

get_header(); ?>

<!-- Hero section for brands -->
<div class="brand-hero-section">
    <div class="hero-left">
        <div class="hero-left-inner">
            <?php
            $hero_title = get_field('hero_title');
            $hero_description = get_field('hero_description');
            $hero_link = get_field('hero_link');
            $hero_link_text = get_field('hero_link_text') ?: __('Request a demo', 'mn-brands');
            ?>
            <?php if ($hero_title): ?>
                <h1><?php echo wp_kses_post($hero_title); ?></h1>
            <?php endif; ?>

            <?php if ($hero_description): ?>
                <div><?php echo wp_kses_post($hero_description); ?></div>
            <?php endif; ?>

            <?php if ($hero_link): ?>
                <a href="<?php echo esc_url($hero_link); ?>" class="btn-demo">
                    <?php echo esc_html($hero_link_text); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="hero-right">
        <div class="swiper my-brands-swiper">
            <div class="swiper-wrapper">
                <?php
                $brands_query = new WP_Query([
                    'post_type' => 'brands',
                    'posts_per_page' => -1,
                ]);
                if ($brands_query->have_posts()) :
                    while ($brands_query->have_posts()) : $brands_query->the_post();
                        $desc = get_field('description');
                        $button = get_field('button');
                        $logo = get_field('logo');
                        $image = get_the_post_thumbnail_url(); ?>
                        <div class="swiper-slide">
                            <div class="slide-wrapper">
                                <?php if ($image): ?>
                                    <div class="slide-image" style="background-image: url('<?php echo esc_url($image); ?>');"></div>
                                <?php endif; ?>
                                <?php if ($desc || $button): ?>
                                    <div class="slide-box">
                                        <?php if ($logo): ?>
                                            <div><img class="slide-brand-logo" src="<?php echo esc_url($logo['url']); ?>" alt="brand" /></div>
                                        <?php endif; ?>
                                        <div class="slide-description">
                                            <?php echo wp_kses_post($desc); ?>
                                        </div>
                                        <?php if ($button): ?>
                                            <a href="<?php echo esc_url($button); ?>" class="btn-explore"><?php esc_html_e('Explore more', 'mn-brands'); ?></a>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
            <div class="swiper-pagination"></div>
            <!-- Vertical navigation arrows -->
            <div class="swiper-vertical-nav">
                <button class="btn-up" aria-label="Scroll Up">
                    <i class="bi bi-arrow-up-short"></i>
                </button>
                <button class="btn-down" aria-label="Scroll Down">
                    <i class="bi bi-arrow-down-short"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Data points section -->
<section class="data-points">
    <div class="point">
        <strong><?php echo esc_html(get_field('data_point_number_1')); ?></strong>
        <span><?php echo esc_html(get_field('data_point_label_1')); ?></span>
    </div>
    <div class="point">
        <strong><?php echo esc_html(get_field('data_point_number_2')); ?></strong>
        <span><?php echo esc_html(get_field('data_point_label_2')); ?></span>
    </div>
    <div class="point">
        <strong><?php echo esc_html(get_field('data_point_number_3')); ?></strong>
        <span><?php echo esc_html(get_field('data_point_label_3')); ?></span>
    </div>
    <div class="point">
        <strong><?php echo esc_html(get_field('data_point_number_4')); ?></strong>
        <span><?php echo esc_html(get_field('data_point_label_4')); ?></span>
    </div>
</section>

<?php get_footer(); ?>