<?php
/**
 * Template Name: Contact Us Page Template
 * 
 * This is the template that displays gift page by default.
 *
 * @package pediawise
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$hero_section = get_field( 'contact_hero_section' );
$contact_us_section = get_field( 'contact_us_section' );
$social_section = get_field( 'contact_social_section' );
?>

<div class="contact-us-page">

  <!-- Hero Section -->
  <?php  if ( ! empty( $hero_section ) ): ?>

    <div class="hero-section section" style="background-image: url(<?php echo $hero_section['background_image']; ?>); background-color: <?php echo $hero_section['background_color']; ?>;">

      <div class="container-fluid">

        <div class="row">

          <div class="col-12 col-lg-6 text-center text-lg-left">

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

          </div><!-- Col -->

        </div><!-- .row -->

      </div><!-- .container -->

    </div><!-- .hero-section -->

  <?php endif; ?>
  <!-- End Hero Section -->


  <!-- Contact Us Section -->
  <?php if ( ! empty( $contact_us_section ) ): ?>

    <div class="contact-us-section section">

      <div class="container-fluid text-center">

        <div class="row">

          <div class="col-md-10 offset-md-1 text-center">
            
            <!-- Title -->
            <?php if ( $contact_us_section['title'] ) : ?>
              <div class="title">
                <h2><?php echo $contact_us_section['title']; ?></h2>
              </div>            
            <?php endif; ?>

          </div><!-- .col -->

        </div><!-- .row -->

        <?php if ( $contact_us_section['contact_us_repeater'] ) : ?>

          <div class="row">

            <?php foreach ( $contact_us_section['contact_us_repeater'] as $each ) :?>

              <div class="col-12 col-lg-4 contact-info text-center mb-5 mb-lg-0">

                <!-- Image -->
                <?php if ( $each['image'] ) : ?>
                  <img src="<?php echo $each['image']; ?>">
                <?php endif; ?>

                <!-- Sub Title -->
                <?php if ( $each['sub_title'] ) : ?>
                  <h3 class="sub-title"><?php echo $each['sub_title']; ?></h3>
                <?php endif; ?>

                <!-- Description -->
                <?php if ( $each['description'] ) : ?>
                  <div class="description">
                    <p><?php echo $each['description']; ?></p>
                  </div>
                <?php endif; ?>

              </div>

            <?php endforeach; ?>

          </div><!-- .row -->        

        <?php endif; ?>

      </div><!-- .container -->

    </div><!-- .contact-us-section -->

  <?php endif; ?>
  <!-- End Contact Us Section -->


  <!-- Social Section -->
  <?php if ( ! empty( $social_section ) ): ?>

    <div class="social-section section">

      <div class="container-fluid text-center">

        <div class="row">

          <div class="col-12 text-center">
            
            <!-- Title -->
            <?php if ( $social_section['title'] ) : ?>
              <div class="title">
                <h2><?php echo $social_section['title']; ?></h2>
              </div>
            <?php endif; ?>

            <!-- Description -->
            <?php if ( $social_section['description'] ) : ?>
              <div class="description">
                <p><?php echo $social_section['description']; ?></p>
              </div>            
            <?php endif; ?>

          </div><!-- .col -->

        </div><!-- .row -->

        <?php if ( $social_section['social_repeater'] ) : ?>

          <div class="row">

            <?php foreach ( $social_section['social_repeater'] as $each ) :?>

              <div class="col-12 col-lg-4 text-center">

                <a href="<?php echo $each['link']; ?>" class="social mb-5 mb-lg-0">
                  <img src="<?php echo $each['icon']; ?>">
                </a>

              </div>

            <?php endforeach; ?>

          </div><!-- .row -->        

        <?php endif; ?>

      </div><!-- .container -->

    </div><!-- .social-section -->

    <?php endif; ?>
    <!-- End Social Section -->

</div>

<?php get_footer(); ?>
