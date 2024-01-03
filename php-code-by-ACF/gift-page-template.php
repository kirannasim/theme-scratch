<?php
/**
 * Template Name: Gift Page Template
 * 
 * This is the template that displays gift page by default.
 *
 * @package pediawise
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$hero_section = get_field('hero_section');
$gift_ways_section = get_field('gift_ways_section');
$middle_banner = get_field('middle_banner');
$faq_section = get_field('faq_section');
?>

<div class="gift-page">

  <!-- Hero Section -->
  <?php  if ( ! empty( $hero_section ) ): ?>

    <div class="gift-hero-section" style="background-image: url(<?php echo $hero_section['background_image']; ?>); background-color: <?php echo $hero_section['background_color']; ?>;">

      <div class="wrapper">

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

            <!-- Button -->
            <?php if ( $hero_section['button']['button_title'] ) : ?>
              <div class="hero-btn background-btn">
                <a class="btn btn-primary" href="#gift_ways"><?php echo $hero_section['button']['button_title']; ?></a>
              </div>
            <?php endif; ?>

          </div><!-- Col -->

        </div><!-- .row -->

      </div><!-- .wrapper -->

    </div><!-- .gift-hero-section -->

  <?php endif; ?>
  <!-- End Hero Section -->


  <!-- Gift Way Section -->
  <?php if ( ! empty( $gift_ways_section ) ): ?>

    <div class="gift-ways-section" id="gift_ways">

      <div class="container text-center">

        <div class="row">

          <div class="col-md-10 offset-md-1 text-center">
            
            <!-- Title -->
            <?php if ( $gift_ways_section['title'] ) : ?>
              <div class="title">
                <h2><?php echo $gift_ways_section['title']; ?></h2>
              </div>
            <?php endif; ?>
            
            <!-- Description -->
            <?php if ( $gift_ways_section['description'] ) : ?>
              <div class="description">
                <?php echo $gift_ways_section['description']; ?>
              </div>
            <?php endif; ?>

          </div><!-- .col -->

        </div><!-- .row -->

        <?php if ( $gift_ways_section['gift_ways_repeater'] ) : ?>

          <div class="row">

            <?php foreach ( $gift_ways_section['gift_ways_repeater'] as $each ) :?>

              <div class="col-md-6 each-way text-center">

                <!-- Image -->
                <?php if ( $each['image'] ) : ?>
                  <div class="img-wrp">
                    <img src="<?php echo $each['image']; ?>">
                  </div>
                <?php endif; ?>

                <!-- Sub Title -->
                <?php if ( $each['sub_title'] ) : ?>
                  <div class="sub-title">
                    <h3><?php echo $each['sub_title']; ?></h3>
                  </div>
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
        
        <!-- Gift Button -->
        <?php if ( $gift_ways_section['gift_button']['button_title'] ) : ?>

          <div class="gifting-btn background-btn">

            <a class="btn btn-primary" href="#gift-ways-form-modal"><?php echo $gift_ways_section['gift_button']['button_title']; ?></a>

            <div id="gift-ways-form-modal" class="gift-ways-popup-block popup-block mfp-hide">

              <a href="javascript:void(0);" class="popup-modal-dismiss"><i class="fa fa-times"></i></a>

              <div class="row">

                <?php foreach ( $gift_ways_section['gift_ways_repeater'] as $each ) :?>

                  <div class="col-md-6">

                    <!-- Sub Title -->
                    <?php if ( $each['sub_title'] ) : ?>
                      <div class="sub-title">
                        <h3><?php echo $each['sub_title']; ?></h3>
                      </div>
                    <?php endif; ?>

                    <?php if ( $each['shortcode'] ) : ?>

                      <div class="gift-ways-form">
                        <?php echo do_shortcode( $each['shortcode'] ); ?>
                      </div>

                    <?php endif; ?>

                  </div>

                <?php endforeach; ?>
              
              </div>

            </div>

          </div>

        <?php endif; ?>

      </div><!-- .wrapper -->

    </div><!-- .gift-ways-section -->

  <?php endif; ?>
  <!-- End Gift Way Section -->


  <!-- Middle Banner Section -->
  <?php if ( ! empty( $middle_banner ) ) :?>

    <div class="middle-banner" style="background-image: url(<?php echo $middle_banner['background_image']; ?>);">

      <div class="wrapper">

        <div class="row">

          <div class="col-md-8">

            <!-- Title -->
            <?php if ( $middle_banner['banner_title'] ) : ?>
              <div class="title">
                <h2><?php echo $middle_banner['banner_title']; ?></h2>
              </div>
            <?php endif; ?>

            <!-- Custom Link -->
            <?php if ( $middle_banner['banner_custom_link']['title'] ) : ?>
              <div class="custom-link">
                <a href="<?php echo $middle_banner['banner_custom_link']['link']; ?>"><?php echo $middle_banner['banner_custom_link']['title']; ?></a>
              </div>
            <?php endif; ?>

          </div><!-- col -->

        </div><!-- .row -->

      </div><!-- .wrapper -->

    </div><!-- .middle-banner -->

  <?php endif; ?>
  <!-- Middle Banner Section -->


  <!-- FAQ Section -->
  <?php if ( ! empty( $faq_section ) ) : ?>

    <div class="gift-faq-section"> 

      <div class="wrapper">

        <!-- Title -->
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

              <!-- FAQ -->
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
      
    </div><!-- .gift-faq-section -->

  <?php endif; ?>
  <!-- End FAQ Section -->


</div>

<?php get_footer(); ?>
