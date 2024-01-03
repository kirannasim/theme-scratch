<?php
/**
 * Template Name: Signup Page Template
 * 
 * This is the template that displays gift page by default.
 *
 * @package pediawise
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$hero_section = get_field( 'hero_section' );
$subscription_info_section = get_field( 'subscription_info_section' );
$middle_banner = get_field( 'middle_banner' );
$faq_section = get_field( 'faq_section' );
?>

<div class="signup-page">

  <!-- Hero Section -->
  <?php if ( ! empty( $hero_section ) ) : ?>

    <div class="signup-hero-section" style="background-image: url(<?php echo $hero_section['background_image']; ?>); background-color: <?php echo $hero_section['background_color']; ?>;">

      <div class="wrapper">

        <div class="row">

          <div class="col-12 col-lg-7 text-center text-lg-left">

            <!-- Title -->
            <?php if ( $hero_section['title'] ) : ?>
              <div class="title">
                <h1><?php echo $hero_section['title']; ?></h1>
              </div>
            <?php endif; ?>

            <!-- Description -->
            <?php if ( $hero_section['description'] ) : ?>
              <div class="description">
                <p><?php echo $hero_section['description']; ?></p>
              </div>
            <?php endif; ?>

            <!-- Button -->
            <?php if ( $hero_section['button']['button_title'] ) : ?>
              <div class="hero-btn background-btn">
                <a class="btn btn-primary" href="#subscription_info"><?php echo $hero_section['button']['button_title']; ?></a>
              </div>
            <?php endif; ?>

          </div><!-- col -->

        </div><!-- .row -->

      </div><!-- .wrapper -->

    </div><!-- .signup-hero-section -->

  <?php endif; ?>
  <!-- End Hero Section -->


  <!-- Subscription Info Section -->
  <?php if ( ! empty( $subscription_info_section ) ) : ?>

    <div class="subscription-info-section" id="subscription_info">

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

          <img class="underline1" src="<?php echo get_stylesheet_directory_uri() ?>/images/common/underline.png">
          <img class="underline2" src="<?php echo get_stylesheet_directory_uri() ?>/images/common/underline.png">
          <img class="underline3" src="<?php echo get_stylesheet_directory_uri() ?>/images/common/underline.png">

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


  <!-- Middle Banner Section -->
  <?php if ( ! empty( $middle_banner ) ) :?>

    <div class="middle-banner" style="background-image: url(<?php echo $middle_banner['background_image']; ?>);">

      <div class="wrapper">

        <div class="row">

          <div class="col-md-8">

            <!-- Section Title -->
            <?php if ( $middle_banner['banner_title'] ) : ?>
              <div class="title">
                <h2><?php echo $middle_banner['banner_title']; ?></h2>
              </div>
            <?php endif; ?>

            <!-- Section Description -->
            <?php if ( $middle_banner['banner_description'] ) : ?>
              <div class="description">
                <p><?php echo $middle_banner['banner_description']; ?></p>
              </div>
            <?php endif; ?>

            <!-- Banner Link -->
            <?php if ( $middle_banner['banner_custom_link']['title'] ) : ?>
              <div class="custom-link">
                <a href="<?php echo $middle_banner['banner_custom_link']['link']; ?>"><?php echo $middle_banner['banner_custom_link']['title']; ?></a>
              </div>
            <?php endif; ?>

          </div>

        </div>

      </div>

    </div>

  <?php endif; ?>
  <!-- End Middle Banner Section -->


  <!-- FAQ Section -->
  <?php if ( ! empty( $faq_section ) ) : ?>

    <div class="signup-faq-section"> 

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
    <!-- End FAQ Section -->

  <?php endif; ?>


</div>

<?php get_footer(); ?>
