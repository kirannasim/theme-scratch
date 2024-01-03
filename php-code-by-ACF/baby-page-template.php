<?php
/**
 * Template Name: Age Category Page Template
 * 
 * This is the template that displays gift page by default.
 *
 * @package pediawise
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$top_hero_section = get_field( 'top_hero_section' );
$flexible_content = get_field( 'flexible_content' );
?>

<div class="baby-page">

    <!-- Top Hero Section -->
    <?php if( ! empty( $top_hero_section ) ) : ?>

    <div class="top-hero-section" style="background-image: url(<?php echo $top_hero_section['background_image']; ?>); background-color: <?php echo $top_hero_section['background_color']; ?>;">

      <div class="container-fluid">

        <div class="row">

          <div class="col-12 col-lg-6 text-center text-lg-left">

            <!-- Section Title -->
            <?php if ( $top_hero_section['title'] ) : ?>
                <div class="title">
                    <h1><?php echo $top_hero_section['title']; ?></h1>             
                </div>
            <?php endif; ?>

            <!-- Section Sub Title -->
            <?php if ( $top_hero_section['sub_title'] ) : ?>
                <div class="sub-title">
                    <p><?php echo $top_hero_section['sub_title']; ?></p>
                </div>
            <?php endif; ?>

            <!-- Section Description -->
            <?php if ( $top_hero_section['description'] ) : ?>
                <div class="description">
                    <p><?php echo $top_hero_section['description']; ?></p>
                </div>
            <?php endif; ?>

          </div><!-- Col -->

        </div><!-- Row -->

      </div><!-- Container -->

    </div><!-- .top-hero-section -->

    <?php endif; ?>
    <!-- End Top Hero Section -->


    <!-- Flexible Content -->
    <?php 

    if ( have_rows('flexible_content') ) : 

        //var_dump(get_field('flexible_content'));

        while ( have_rows('flexible_content') ) : the_row(); ?>

            <!-- Hot Topics Section -->
            <?php 
            if ( get_row_layout() == 'hot_topics_layout' ) :

                $hot_topics_section = get_sub_field('hot_topics_section'); ?>
              
                <?php if ( ! empty( $hot_topics_section ) ) : ?>

                    <div class="hot-topics-section" id="hot-topics-section">

                        <div class="wrapper text-center">

                            <!-- Section Title -->
                            <?php if ( $hot_topics_section['title'] ) : ?>
                                <div class="title">
                                    <h2><?php echo $hot_topics_section['title']; ?></h2>
                                </div>
                            <?php endif; ?>

                            <!-- Section Description -->
                            <?php if ( $hot_topics_section['description'] ) : ?>
                                <div class="description">
                                    <p><?php echo $hot_topics_section['description']; ?></p>
                                </div>
                            <?php endif; ?>

                            <!-- Posts slider -->
                            <div class="post-slider-wrap">

                                <?php foreach ( $hot_topics_section['posts'] as $each ) : $each_post = $each['post']; ?>
                                  
                                    <!-- Post -->
                                    <div class="each">
                                        <div class="each-wrp">
                                            <a href="<?php echo get_permalink($each_post->ID) ?>">
                                                <div class="img-wrp">
                                                    <?php echo get_the_post_thumbnail( $each_post->ID ); ?>
                                                </div>
                                                <div class="post-title">
                                                    <p><?php echo $each_post->post_title; ?></p>
                                                </div>
                                            </a>
                                        </div>              
                                    </div>

                                <?php endforeach; ?>

                            </div>
                        
                            <!-- View All Button -->
                            <?php if ( $hot_topics_section['view_all_button']['button_title'] ) : ?>
                                <div class="view-all-btn background-btn">
                                    <a class="btn btn-primary" href="<?php echo $hot_topics_section['view_all_button']['button_link']; ?>"><?php echo $hot_topics_section['view_all_button']['button_title']; ?></a>
                                </div>
                            <?php endif; ?>

                        </div><!-- wrapper -->

                    </div><!-- .hot-topics-section -->

                <?php endif; ?>
                <!-- End Hot Topics Section -->


            <!-- Freebies Section -->
            <?php
            elseif ( get_row_layout() == 'freebies_layout' ):

                $freebies_section = get_sub_field('freebies_section'); ?>
  
                <?php if ( ! empty( $freebies_section ) ) : ?>

                    <div class="freebies-section" id="freebies-section">

                        <div class="wrapper">

                            <!-- Section Title -->
                            <?php if ( $freebies_section['title'] ) : ?>
                                <div class="title text-center">
                                    <h2><?php echo $freebies_section['title'];?></h2>
                                </div>
                            <?php endif; ?>

                            <!-- Section Description -->
                            <?php if ( $freebies_section['description'] ) : ?>
                                <div class="description text-center">
                                    <p><?php echo $freebies_section['description']; ?></p>
                                </div>
                            <?php endif; ?>
                        
                            <!-- Posts slider -->
                            <div class="post-slider-wrap">

                                <?php foreach ( $freebies_section['posts'] as $each ) : $each_post = $each['post']; ?>
                                
                                    <!-- Post -->
                                    <div class="each">
                                        <a href="<?php echo get_permalink($each_post->ID) ?>">
                                            <div class="row">
                                                <div class="col-md-4 col-lg-6 left-content">
                                                    <div class="img-wrp">
                                                        <?php echo get_the_post_thumbnail( $each_post->ID ); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-6 right-content">
                                                    <div class="post-title">
                                                        <h3><?php echo $each_post->post_title; ?></h3>
                                                    </div>
                                                    <div class="content">
                                                        <p><?php echo $each_post->post_excerpt; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                              <?php endforeach; ?>

                            </div>
                        
                            <!-- View All Button -->
                            <?php if ( $freebies_section['view_all_button']['button_title'] ) : ?>
                                <div class="view-all-btn background-btn">
                                    <a class="btn btn-primary" href="<?php echo $freebies_section['view_all_button']['button_link']; ?>"><?php echo $freebies_section['view_all_button']['button_title']; ?></a>
                                </div>
                            <?php endif; ?>

                        </div><!-- wrapper -->

                    </div><!-- .freebies-section -->

                <?php endif; ?>
                <!-- End Freebies Section -->

            <!-- Top 10s Section -->
            <?php
            elseif ( get_row_layout() == 'top_10s_layout' ):

                $top_10s_section = get_sub_field('top_10s_section'); ?>
  
                <?php if ( ! empty( $top_10s_section ) ) : ?>

                    <div class="top-10s-section" id="top-10s-section">

                        <div class="wrapper text-center">

                            <!-- Section Title -->
                            <?php if ( $top_10s_section['title'] ) : ?>
                                <div class="title">
                                    <h2><?php echo $top_10s_section['title'];?></h2>
                                </div>
                            <?php endif; ?>

                            <!-- Section Description -->
                            <?php if ( $top_10s_section['description'] ) : ?>
                                <div class="description">
                                    <p><?php echo $top_10s_section['description']; ?></p>
                                </div>
                            <?php endif; ?>

                            <!-- Posts slider -->
                            <div class="post-slider-wrap">

                                <?php foreach ( $top_10s_section['posts'] as $each ) : $each_post = $each['post']; ?>
                                  
                                      <!-- Post -->
                                      <div class="each">
                                            <div class="each-wrp">
                                                <a href="<?php echo get_permalink($each_post->ID) ?>">
                                                    <div class="img-wrp">
                                                        <?php echo get_the_post_thumbnail( $each_post->ID ); ?>
                                                    </div>
                                                    <div class="post-title">
                                                        <p><?php echo $each_post->post_title; ?></p>
                                                    </div>
                                                </a>
                                            </div>              
                                      </div>

                                <?php endforeach; ?>

                            </div>
                          
                            <!-- View All Button -->
                            <?php if ( $top_10s_section['view_all_button']['button_title'] ) : ?>
                                <div class="view-all-btn background-btn">
                                    <a class="btn btn-primary" href="<?php echo $top_10s_section['view_all_button']['button_link']; ?>"><?php echo $top_10s_section['view_all_button']['button_title']; ?></a>
                                </div>
                            <?php endif; ?>

                        </div><!-- wrapper -->

                    </div><!-- .top-10s-section -->

                <?php endif; ?>
                <!-- End Top 10s Section -->


            <!-- Question of the Week Section -->
            <?php
            elseif ( get_row_layout() == 'question_of_the_week_layout' ):

                $question_of_the_week_section = get_sub_field('question_of_the_week_section'); ?>
  
                <?php if ( ! empty( $question_of_the_week_section ) ) : ?>

                    <div class="question-of-the-week-section" style="background-image: url(<?php echo $question_of_the_week_section['background_image'];?>)" id="question-of-the-week-section">
                      
                        <div class="wrapper text-center">

                            <!-- Section Title -->
                            <?php if ( $question_of_the_week_section['title'] ) : ?>
                                <div class="title">
                                    <h2><?php echo $question_of_the_week_section['title']; ?></h2>
                                </div>
                            <?php endif; ?>

                            <!-- Section Description -->
                            <?php if ( $question_of_the_week_section['description'] ) : ?>
                                <div class="description">
                                    <p><?php echo $question_of_the_week_section['description']; ?></p>
                                </div>
                            <?php endif; ?>

                            <!-- Posts slider -->
                            <div class="post-slider-wrap">
                                <?php foreach ( $question_of_the_week_section['posts'] as $each ) : $each_post = $each['post']; ?>
                                
                                <!-- Post -->
                                <div class="each">
                                    <div class="each-wrp">
                                        <a href="<?php echo get_permalink($each_post->ID) ?>">
                                            <div class="img-wrp">
                                                <?php echo get_the_post_thumbnail( $each_post->ID ); ?>
                                            </div>
                                            <div class="post-title">
                                                <p><?php echo $each_post->post_title; ?></p>
                                            </div>
                                        </a>
                                    </div>              
                                </div>

                                <?php endforeach; ?>

                            </div>
                        
                            <!-- View All Button -->
                            <?php if ( $question_of_the_week_section['view_all_button']['button_title'] ) : ?>
                                <div class="view-all-btn background-btn">
                                    <a class="btn btn-primary" href="<?php echo $question_of_the_week_section['view_all_button']['button_link']; ?>"><?php echo $question_of_the_week_section['view_all_button']['button_title']; ?></a>
                                </div>
                            <?php endif; ?>

                        </div><!-- .wrapper -->

                    </div><!-- .question-of-the-week-section -->

                <?php endif;?>
                <!-- End Question of the Week Section -->


            <!-- More Info Section -->
            <?php
            elseif ( get_row_layout() == 'more_info_layout' ):

                $more_info_section = get_sub_field('more_info_section'); ?>
  
                <?php if ( ! empty( $more_info_section ) ) : ?>

                    <div class="more-info-section" id="more-info-section">

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
