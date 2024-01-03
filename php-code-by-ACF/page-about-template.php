<?php
/**
 * Template Name: About Us Page Template
 * 
 * This is the template that displays about page by default.
 *
 * @package pediawise
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

$hero_section              = get_field('hero_section');
$about_section             = get_field('about_section');
$subscription_info_section = get_field('subscription_info_section');
$history_section           = get_field('history_section');
$middle_banner             = get_field('middle_banner');
$faq_section               = get_field('faq_section');
$meet_the_doctor_section   = get_field("meet_the_doctor_section");
$gift_middle_banner        = get_field('gift_middle_banner');

?>

<div class="about-us-page">
    
    <!-- Hero Section -->
    <?php
    if (!empty($hero_section)) :?>

        <div class="about-us-hero-section">

            <img src="<?php echo $hero_section['background_image']; ?>">

        </div>

        <?php
    endif; ?>

    <!-- About Section -->
    <?php
    if(!empty($about_section)) :?>
        <div class="about-section">

            <div class="wrapper">

                <!-- Title -->
                <?php if ( $about_section['title'] ) : ?>
                    <div class="title text-center">
                        <h2><?php echo $about_section['title']; ?></h2>
                    </div>
                <?php endif; ?>

                <!-- Content -->
                <?php if ( $about_section['content'] ) : ?>
                    <div class="content">
                        <?php echo $about_section['content']; ?>
                    </div>
                <?php endif; ?>

                <!-- Button -->
                <?php if ( $about_section['button']['title'] ) : ?>
                    <div class="signup-btn background-btn" style="background-image:  url(<?php echo $about_section['button']['background_image']; ?>);">
                        <a class="btn btn-primary" href="<?php echo $about_section['button']['link']; ?>"><?php echo $about_section['button']['title']; ?></a>
                    </div>
                <?php endif; ?>

            </div><!-- .wrapper -->

        </div><!-- .about-section -->

        <?php
    endif; ?>


    <!-- Subscription Info Section -->
    <?php if ( ! empty( $subscription_info_section ) ) : ?>

        <div class="subscription-info-section" id="subscription-info-section">

            <div class="wrapper">

                <!-- Section Title -->
                <?php if ( $subscription_info_section['title'] ) : ?>
                    <div class="title">
                        <h2><?php echo $subscription_info_section['title']; ?></h2>
                    </div>
                <?php endif; ?>

                <!-- Section Description -->
                <?php if ( $subscription_info_section['description'] ) : ?>
                    <div class="description">
                        <p><?php echo $subscription_info_section['description']; ?></p>
                    </div>
                <?php endif; ?>

                <!-- Membership info -->
                <div class="membership-info">

                    <img class="underline1" src="<?php echo get_stylesheet_directory_uri() ?>/images/common/underline2.png">
                    <img class="underline2" src="<?php echo get_stylesheet_directory_uri() ?>/images/common/underline2.png">
                    <img class="underline3" src="<?php echo get_stylesheet_directory_uri() ?>/images/common/underline2.png">

                    <!-- Membership Table -->
                    <table class="table">

                        <thead>
                            <tr>
                                <th></th>
                                <th><p class="th-title">Free Membership<p></th>
                                <th>
                                    <p class="th-title">Premium Membership</p>
                                    <p class="th-price-info">$<?php echo $subscription_info_section['premium_membership_fee']['monthly_fee']; ?>/month or $<?php echo $subscription_info_section['premium_membership_fee']['yearly_fee']; ?>/year</p>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ( $subscription_info_section['subscription_options'] as $each ) :?>
                            <tr>
                                <td>
                                    <p class="option-title"><?php echo $each['title'];?></p>
                                    <p class="option-description"><?php echo $each['description'];?></p>
                                </td>
                                <td>
                                    <?php if ( $each['free_membership'] ) : ?>
                                        <img src="<?php echo $subscription_info_section['membership_check_image'];?>">
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ( $each['premium_membership'] ) : ?>
                                    <img src="<?php echo $subscription_info_section['membership_check_image'];?>">
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                            <?php
                            $subscription_shortcode = $subscription_info_section['subscription_shortcode']; 
                            if ( $subscription_shortcode ) : ?>
                                <tr>
                                    <td></td>
                                    <td>
                                        <?php if ( $subscription_shortcode['monthly_form'] ) : ?>
                                        <?php echo do_shortcode( $subscription_shortcode['monthly_form'] ); ?>
                                        <!--
                                        <div class="signup-btn background-btn">
                                            <a class="btn btn-primary" href="#">Sign Up</a>
                                        </div>
                                        -->
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ( $subscription_shortcode['yearly_form'] ) : ?>
                                        <?php echo do_shortcode( $subscription_shortcode['yearly_form'] ); ?>
                                        <!--
                                        <div class="signup-btn background-btn">
                                            <a class="btn btn-primary" href="#">Sign Up</a>
                                        </div>
                                        -->
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>

                    </table>

                </div><!-- .membership-info -->

            </div><!-- .wrapper -->

        </div><!-- .subscription-info-section -->

    <?php endif; ?>
    <!-- End Subscription Info Section -->

    <!-- Meet the Doctor Section -->
    <?php if( !empty( $meet_the_doctor_section ) ) : ?>

        <div class="meet-the-doctor-section" id="meet-the-doctor-section">

            <img class="meet-doctor-effect" src="<?php echo get_stylesheet_directory_uri(); ?>/images/meet-the-doctor-bg-effect.png">
            
            <div class="wrapper">

                <div class="row">

                    <!-- Left Content -->
                    <div class="col-md-4 left-content text-center">

                        <img class="doctor-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/doctor.png">

                    </div><!-- .left-content  -->

                    <!-- Right Content -->
                    <div class="col-md-8 right-content">

                        <!-- Title -->
                        <div class="title">

                            <h2><?php echo $meet_the_doctor_section['title']; ?></h2>

                        </div><!-- .title  -->

                        <!-- Content -->
                        <div class="content">
                            <?php echo $meet_the_doctor_section['content'];?>
                        </div><!-- .content  -->

                    </div><!-- .right-content  -->

                </div><!-- .row  -->

            </div><!-- .wrapper -->

        </div>

    <?php endif; ?>
    <!-- End Meet the Doctor Section -->

    <!-- Gift Middle Banner Section -->
    <?php if ( ! empty( $gift_middle_banner ) ) :?>

    <div class="gift-middle-banner" style="background-image: url(<?php echo $gift_middle_banner['background_image']; ?>);">

      <div class="wrapper">

        <div class="row">

          <div class="col-md-8">

            <!-- Section Title -->
            <?php if ( $gift_middle_banner['banner_title'] ) : ?>
              <div class="title">
                <h2><?php echo $gift_middle_banner['banner_title']; ?></h2>
              </div>
            <?php endif; ?>

            <!-- Section Description -->
            <?php if ( $gift_middle_banner['banner_description'] ) : ?>
              <div class="description">
                <p><?php echo $gift_middle_banner['banner_description']; ?></p>
              </div>
            <?php endif; ?>

            <!-- Banner Link -->
            <?php if ( $gift_middle_banner['banner_custom_link']['title'] ) : ?>
              <div class="custom-link">
                <a href="<?php echo $gift_middle_banner['banner_custom_link']['link']; ?>"><?php echo $gift_middle_banner['banner_custom_link']['title']; ?></a>
              </div>
            <?php endif; ?>

          </div>

        </div>

      </div>

    </div>

    <?php endif; ?>
    <!-- End Middle Banner Section -->

    <!-- History Section -->
    <?php if( !empty( $history_section ) ) : ?>

        <div class="history-section">

            <div class="wrapper">

                <!-- Title -->
                <?php if ( $history_section['title'] ) : ?>
                    <div class="title text-center">
                        <h2><?php echo $history_section['title']; ?></h2>
                    </div>
                <?php endif; ?>

                <!-- The Need Part -->
                <div class="row the-need">

                    <div class="col-md-6">

                        <div class="left-content">

                            <!-- Title -->
                            <?php if ( $history_section['the_need']['title'] ) : ?>
                                <div class="title">
                                    <h3><?php echo $history_section['the_need']['title']; ?></h3>
                                </div>
                            <?php endif; ?>

                            <!-- Content -->
                            <?php if ( $history_section['the_need']['content'] ) : ?>
                                <div class="content">
                                    <?php echo $history_section['the_need']['content']; ?>
                                </div>
                            <?php endif; ?>

                        </div><!-- .left-content -->

                    </div><!-- .col -->

                    <div class="col-md-6 ">

                        <div class="right-img-wrp">

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/border-bg1.png">

                        </div>

                    </div><!-- .col -->

                </div>

                <!-- The Problem Part -->
                <div class="row the-problem">

                    <div class="col-md-6">

                        <div class="left-img-wrp">

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/border-bg2.png">

                        </div>

                    </div><!-- .col -->

                    <div class="col-md-6">

                        <div class="right-content">

                            <!-- Title -->
                            <?php if ( $history_section['the_problem']['title'] ) : ?>
                                <div class="title">
                                    <h3><?php echo $history_section['the_problem']['title']; ?></h3>
                                </div>
                            <?php endif; ?>

                            <!-- Content -->
                            <?php if ( $history_section['the_problem']['content'] ) : ?>
                                <div class="content">
                                    <?php echo $history_section['the_problem']['content']; ?>
                                </div>
                            <?php endif; ?>

                        </div>

                    </div><!-- .col -->

                </div>

                <!-- The Solution Part -->
                <div class="row the-solution">

                    <div class="col-md-6">

                        <div class="left-content">

                            <!-- Title -->
                            <?php if ( $history_section['the_solution']['title'] ) : ?>
                                <div class="title">
                                    <h3><?php echo $history_section['the_solution']['title']; ?></h3>
                                </div>
                            <?php endif; ?>

                            <!-- Content -->
                            <?php if ( $history_section['the_solution']['content'] ) : ?>
                                <div class="content">
                                    <?php echo $history_section['the_solution']['content']; ?>
                                </div>
                            <?php endif; ?>

                        </div>

                    </div><!-- .col -->

                    <div class="col-md-6 ">

                        <div class="right-img-wrp">

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/border-bg3.png">

                        </div>

                    </div><!-- .col -->

                </div><!-- End of The Solution Part -->

            </div><!-- .wrapper -->

        </div><!-- End of History Section -->

    <?php endif;?>

    <!-- Middle Banner Section -->
    <?php if ( !empty( $middle_banner ) ) : ?>

        <div class="middle-banner" style="background-image: url(<?php echo $middle_banner['background_image']; ?>);">

            <div class="container text-center">

                <?php if ( $middle_banner['title'] ) : ?>
                    <div class="title">
                        <h2><?php echo $middle_banner['title']; ?></h2>
                    </div>
                <?php endif; ?>
                
                <?php if ( $middle_banner['button']['title'] ) : ?>
                    <div class="subscribe-btn background-btn">
                        <a class="btn btn-primary" href="<?php echo $middle_banner['button']['link']; ?>"><?php echo $middle_banner['button']['title']; ?></a>
                    </div>
                <?php endif; ?>

            </div><!-- .wrapper -->

        </div><!-- .middle-banner -->

    <?php endif; ?> 
    <!-- End Middle Banner Section -->

    <!-- FAQ Section -->
    <?php if ( ! empty( $faq_section ) ) : ?>

    <div class="aboutus-faq-section" id="aboutus-faq-section"> 

        <div class="wrapper">

            <!-- Section Title -->
            <?php if ( $faq_section['title'] ) : ?>
                <div class="title text-center">
                    <h2><?php echo $faq_section['title'];?></h2>
                </div>
            <?php endif; ?>

            <?php if ( $faq_section['faq_repeater'] ) : ?>

                <!-- FAQ Content -->
                <div class="faq-content" id="gift-faq">

                    <?php $index = 0; ?>
                    <?php foreach ( $faq_section['faq_repeater'] as $each ) : ?>

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#card-<?php echo $index; ?>">
                                    <div><?php echo $each['question']; ?></div>
                                </a>
                            </div>
                            <div id="card-<?php echo $index; ?>" class="collapse" data-parent="#gift-faq">
                                <div class="card-body">
                                    <?php echo $each['answer']; ?>
                                </div>
                            </div>
                        </div>

                        <?php $index++; ?>
                    <?php endforeach; ?>

                </div><!-- .faq-content -->

            <?php endif; ?>

        </div><!-- .wrapper -->
      
    </div><!-- .signup-faq-section -->

    <?php endif; ?>
    <!-- End FAQ Section -->

</div>

<?php get_footer(); ?>
