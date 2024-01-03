<?php
/**
 * Template Name: Pediafeed Page Template
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
$posts_section = get_field('posts_section');
$twitter_feed_section = get_field('twitter_feed_section');
$middle_banner = get_field('middle_banner');
$instagram_feed_section = get_field('instagram_feed_section');
?>

<div class="feed-page">

  <!-- Title Banner Section -->
  <?php if ( ! empty( $title_banner_section ) ) : ?>

      <div class="title-banner-section" style="background-image: url(<?php echo $title_banner_section['background_image']; ?>)">

        <div class="wrapper text-center">

          <?php if ( $title_banner_section['title'] ) : ?>
            <div class="title">
              <h1><?php echo $title_banner_section['title']; ?></h1>
            </div>
          <?php endif; ?>

        </div><!-- .wrapper -->
        
      </div><!-- .title-banner-section -->

  <?php endif; ?>
  <!-- End Title Banner Section -->


  <!-- Posts Section -->
  <?php if ( ! empty( $posts_section ) ) : ?>

    <div class="posts-section">

      <div class="wrapper">
        
        <!-- Title -->
        <?php if ( $posts_section['title'] ) : ?>
          <div class="title text-center">
            <h2><?php echo $posts_section['title']; ?></h2>
          </div>
        <?php endif; ?>

        <!-- Posts slider -->
        <div class="post-slider-wrap">

          <?php foreach ( $posts_section['posts'] as $each ) :?>
            
            <!-- Post -->
            <div class="each">
              <div class="row">
                <div class="col-lg-4 left-content">
                  <div class="img-wrp">
                    <img src="<?php echo $each['feature_image'];?>">
                  </div>                    
                </div>
                <div class="col-lg-8 right-content">
                  <?php echo $each['contents']; ?>
                </div>
              </div>
            </div> 

          <?php endforeach; ?>

        </div>
        
        <!-- View More -->
        <div class="view-more text-center">
          <a href="#">View More</a>
        </div>
        
      </div><!-- .wrapper -->

    </div><!-- .posts-section -->

  <?php endif; ?>
  <!-- End Posts Section -->

  
  <!-- Twitter Feed Section -->
  <?php if ( ! empty( $twitter_feed_section ) ): ?>

    <div class="twitter-feed-section">

      <img class="pediafeed-corner1" src="<?php echo get_stylesheet_directory_uri() ?>/images/common/pediafeed_corner1.png">
      <img class="pediafeed-corner2" src="<?php echo get_stylesheet_directory_uri() ?>/images/common/pediafeed_corner2.png">
      <img class="pediafeed-corner3" src="<?php echo get_stylesheet_directory_uri() ?>/images/common/pediafeed_corner3.png">

      <div class="container text-center">

        <?php if ( $twitter_feed_section['title'] ) : ?>
          <div class="title">
            <h2><?php echo $twitter_feed_section['title']; ?></h2>
          </div>
        <?php endif; ?>
        
        <?php if ( $twitter_feed_section['embed_code'] ) : ?>
          <div class="embed-code">
            <?php echo $twitter_feed_section['embed_code']; ?>
          </div>
        <?php endif; ?>

      </div><!-- .container -->   

    </div><!-- .twitter-feed-section -->

  <?php endif; ?>
  <!-- End Twitter Feed Section -->


  <!-- Middle Banner Section -->
  <?php if ( !empty( $middle_banner ) ) : ?>

    <div class="middle-banner" style="background-image: url(<?php echo $middle_banner['background_image']; ?>);">

      <div class="wrapper text-center">

        <?php if ( $middle_banner['title'] ) : ?>
          <div class="title">
            <h2><?php echo $middle_banner['title']; ?></h2>
          </div>
        <?php endif; ?>
        
        <?php if ( $middle_banner['button']['button_title'] ) : ?>
          <div class="subscribe-btn background-btn">
            <a class="btn btn-primary" href="<?php echo $middle_banner['button']['button_link']; ?>"><?php echo $middle_banner['button']['button_title']; ?></a>
          </div>
        <?php endif; ?>

      </div><!-- .wrapper -->

    </div><!-- .middle-banner -->

  <?php endif; ?> 
  <!-- End Middle Banner Section -->

  
  <!-- Instagram Feed Section -->
  <?php if ( ! empty( $instagram_feed_section ) ) : ?>

    <div class="instagram-feed-section">

      <div class="wrapper text-center">

        <?php if ( $instagram_feed_section['title'] ) : ?>
          <div class="title">
            <h2><?php echo $instagram_feed_section['title']; ?></h2>
          </div>
        <?php endif; ?>
        
        <?php if ( $instagram_feed_section['embed_code'] ) : ?>
          <div class="embed-code">
            <?php echo $instagram_feed_section['embed_code']; ?>
          </div>
        <?php endif; ?>

      </div><!-- .wrapper -->     

    </div><!-- .instagram-feed-section -->

  <?php endif; ?>
  <!-- End Instagram Feed Section -->

</div>

<?php get_footer(); ?>
