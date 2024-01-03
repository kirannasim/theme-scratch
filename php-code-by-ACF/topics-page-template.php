<?php
/**
 * Template Name: Topics Page Template
 * 
 * This is the template that displays gift page by default.
 *
 * @package pediawise
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$title_banner_section = get_field('title_banner_section');
$flexible_content = get_field('flexible_content');
?>

<div class="topics-page">

    <!-- Title Banner Section -->
    <?php if ( ! empty( $title_banner_section ) ) : ?>

        <div class="title-banner-section" style="background-image: url(<?php echo $title_banner_section['background_image']; ?>)">

            <div class="wrapper text-center">

                <div class="title" style="background-image: url(<?php echo $title_banner_section['title_background_ribbon']; ?>)">

                    <h1 style="color: <?php echo $title_banner_section['title_color']; ?>">
                        <?php echo $title_banner_section['title']; ?>
                    </h1>

                </div><!-- .title -->

            </div><!-- .wrapper -->
        
        </div><!-- .title-banner-section -->

    <?php endif; ?>

    <!-- Flexible Content -->
    <?php 

    if ( have_rows('flexible_content') ) : 

        //var_dump(get_field('flexible_content'));

        while ( have_rows('flexible_content') ) : the_row(); ?>

            <!-- Pregnancy Section -->
            <?php 
            if ( get_row_layout() == 'pregnancy_layout' ) :

                $pregnancy_section = get_sub_field('pregnancy_section'); 

                if (!empty($pregnancy_section)) : ?>

                    <div class="pregnancy-section">
                        
                        <div class="wrapper text-center">
                            
                            <?php if ( $pregnancy_section['title'] ) : ?>
                                <div class="title">                    
                                    <h2><?php echo $pregnancy_section['title']; ?></h2>
                                </div><!-- .title -->
                            <?php endif; ?>

                            <?php if ( $pregnancy_section['posts'] ) : ?>

                                <div class="posts">

                                    <div class="row">

                                        <?php foreach ( $pregnancy_section['posts'] as $each ) : $each_post = $each['post']; ?>

                                            <div class="col-md-4 each">

                                                <div class="inner-wrp">
                                                    <a href="<?php echo get_permalink($each_post->ID) ?>">
                                                        <div class="img-wrp">
                                                            <?php echo get_the_post_thumbnail( $each_post->ID ); ?>
                                                        </div><!-- .img-wrp -->
                                                        <div class="sub-title">
                                                            <p><?php echo $each_post->post_title; ?></p>
                                                        </div><!-- .sub-title -->
                                                    </a>
                                                </div><!-- .inner-wrp -->

                                            </div><!-- .col-md-4.each -->

                                        <?php endforeach; ?>

                                    </div><!-- .row -->

                                </div><!-- .posts -->

                            <?php endif; ?>

                        </div><!-- .wrapper -->

                    </div><!-- .pregnancy-section -->

                <?php endif;?>

            <!-- Baby Section -->
            <?php 
            elseif ( get_row_layout() == 'baby_layout' ) :

                $baby_section = get_sub_field('baby_section'); 

                if (!empty($baby_section)) : ?>

                    <div class="baby-section">
                        
                        <div class="wrapper text-center">
                            
                            <?php if ( $baby_section['title'] ) : ?>
                                <div class="title">                    
                                    <h2><?php echo $baby_section['title']; ?></h2>
                                </div><!-- .title -->
                            <?php endif; ?>

                            <?php if ( $baby_section['posts'] ) : ?>

                                <div class="posts">

                                    <div class="row">

                                        <?php foreach ( $baby_section['posts'] as $each ) : $each_post = $each['post']; ?>

                                            <div class="col-md-4 each">

                                                <div class="inner-wrp">
                                                    <a href="<?php echo get_permalink($each_post->ID) ?>">
                                                        <div class="img-wrp">
                                                            <?php echo get_the_post_thumbnail( $each_post->ID ); ?>
                                                        </div><!-- .img-wrp -->
                                                        <div class="sub-title">
                                                            <p><?php echo $each_post->post_title; ?></p>
                                                        </div><!-- .sub-title -->
                                                    </a>
                                                </div><!-- .inner-wrp -->

                                            </div><!-- .col-md-4.each -->

                                        <?php endforeach; ?>

                                    </div><!-- .row -->

                                </div><!-- .posts -->

                            <?php endif; ?>

                        </div><!-- .wrapper -->

                    </div><!-- .baby-section -->

                <?php endif; ?>

            <!-- Toddler Section -->
            <?php 

            elseif ( get_row_layout() == 'toddler_layout' ) :

                $toddler_section = get_sub_field('toddler_section');

                if ( ! empty( $toddler_section ) ) : ?>

                    <div class="toddler-section">
                        
                        <div class="wrapper text-center">
                            
                            <?php if ( $toddler_section['title'] ) : ?>
                                <div class="title">                    
                                    <h2><?php echo $toddler_section['title']; ?></h2>
                                </div><!-- .title -->
                            <?php endif; ?>

                            <?php if ( $toddler_section['posts'] ) : ?>

                                <div class="posts">

                                    <div class="row">

                                        <?php foreach ( $toddler_section['posts'] as $each ) : $each_post = $each['post']; ?>

                                            <div class="col-md-4 each">

                                                <div class="inner-wrp">
                                                    <a href="<?php echo get_permalink($each_post->ID) ?>">
                                                        <div class="img-wrp">
                                                            <?php echo get_the_post_thumbnail( $each_post->ID ); ?>
                                                        </div><!-- .img-wrp -->
                                                        <div class="sub-title">
                                                            <p><?php echo $each_post->post_title; ?></p>
                                                        </div><!-- .sub-title -->
                                                    </a>
                                                </div><!-- .inner-wrp -->

                                            </div><!-- .col-md-4.each -->

                                        <?php endforeach; ?>

                                    </div><!-- .row -->

                                </div><!-- .posts -->

                            <?php endif; ?>

                        </div><!-- .wrapper -->

                    </div><!-- .toddler-section -->

                    <?php 
                endif;?>

            <!-- PediaFeed Section -->
            <?php 

            elseif ( get_row_layout() == 'pediafeed_layout' ) :

                $pediafeed_section = get_sub_field('pediafeed_section');

                if ( ! empty( $pediafeed_section ) ) : ?>

                    <div class="pediafeed-section">

                        <div class="wrapper text-center">

                            <?php if ( $pediafeed_section['title'] ) : ?>
                                <div class="title">
                                    <h2><?php echo $pediafeed_section['title']; ?></h2>
                                </div><!-- .title -->
                            <?php endif; ?>
                            
                            <?php if ( $pediafeed_section['posts'] ) : ?>

                                <div class="posts">

                                    <?php foreach ( $pediafeed_section['posts'] as $each ) : ?>

                                        <div class="each">
                                            <div class="sub-title">
                                                <h3><?php echo $each['title']; ?></h3>
                                            </div><!-- .sub-title -->
                                            <div class="description">
                                                <p><?php echo $each['description']; ?></p>
                                            </div><!-- .description -->
                                        </div><!-- .each -->

                                    <?php endforeach; ?>

                                </div><!-- .posts -->

                            <?php endif; ?>

                        </div><!-- .wrapper -->
                        
                    </div><!-- .pediafeed-section -->

                <?php endif; ?>

            <!-- Category Section -->
            <?php 

            elseif ( get_row_layout() == 'category_layout' ) :

                $category_section = get_sub_field('category_section');

                if ( ! empty( $category_section ) ) : ?>

                    <div class="category-section">

                        <div class="wrapper">

                            <div class="row">

                                <?php foreach ( $category_section as $each ) : ?>

                                    <div class="col-md-3 each text-center">

                                        <a href="<?php echo $each['page_link']; ?>">
                                            <div class="img-wrp">
                                                <img src="<?php echo $each['feature_image']; ?>">
                                            </div><!-- .img-wrp -->
                                            <div class="sub-title">
                                                <h3><?php echo $each['title']; ?></h3>
                                            </div><!-- .sub-title -->                                
                                        </a>

                                    </div><!-- .col-md-3 -->

                                <?php endforeach; ?>

                            </div><!-- .row -->

                        </div><!-- .wrapper -->

                    </div><!-- .category-section -->

                <?php endif; ?>

            <!-- More Info Section -->
            <?php

            elseif ( get_row_layout() == 'more_info_layout' ):

                $more_info_section = get_sub_field('more_info_section'); ?>
  
                <?php if ( ! empty( $more_info_section ) ) : ?>

                    <div class="more-info-section">

                        <div class="container text-center">

                            <!-- Section Top Image -->
                            <?php if ( $more_info_section['top_image'] ) : ?>
                                <div class="img-wrp">
                                    <img src="<?php echo $more_info_section['top_image']; ?>">
                                </div>
                            <?php endif; ?>

                            <!-- Section Title -->
                            <?php if ( $more_info_section['title'] ) : ?>
                                <div class="title">
                                    <h2><?php echo $more_info_section['title']; ?></h2>
                                </div>
                            <?php endif; ?>

                            <!-- Section Desctiption -->
                            <?php if ( $more_info_section['description'] ) : ?>
                                <div class="description">
                                    <p><?php echo $more_info_section['description']; ?></p>
                                </div>
                            <?php endif; ?>
                        
                        </div><!-- .wrapper -->

                        <!-- Search Wrapper -->
                        <div class="search-wrp text-center">
                            <div class="inner-wrp">
                                <input type="text" name="question-s" placeholder="Type your question here..." autocomplete="off" />
                                <div class="submit-btn background-btn">
                                    <a class="btn btn-primary" href="javascript:;">Submit</a>
                                </div>
                            </div>
                        </div>

                    </div><!-- .more-info-section -->

                <?php endif; ?>
                <!-- More Info Section -->

            <?php endif; ?>

        <?php 
        endwhile;
    endif; ?><!-- End of Flexible Content -->
  
</div>

<?php get_footer(); ?>
