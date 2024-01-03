<?php
/**
 * Template Name: About Page Template
 * 
 * This is the template that displays about page by default.
 *
 * @package pediawise
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- Banner -->
<div id="banner" class="section">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-banner.png" />

</div><!-- #banner -->


<!-- About Intro -->
<div id="about-intro" class="section">

    <div class="wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12 col-lg-10 offset-lg-1">

                    <h2 class="section-title secondary-color text-center">About PediaWise</h2>
                    <p>Welcome to PediaWise, your go-to source for reliable, up-to-date, and easy-to-digest health information from pregnancy through the toddler years.</p>
                    <p>PediaWise includes a searchable website chock-full of important health information (covering pregnancy and the first 3 years of life) plus <a href="#">Customizable Newsletters</a> (sent to your inbox), <a href="#">News Alerts, Top 10 Lists, Hot Topics, Questions of the Week</a>, and MORE.</p>
                    <p>The content is researched and written by Dr. Blair Farr (that’s me!), a board-certified pediatrician and mom. Get to know me better and learn more about PediaWise below.</p>
                    <div class="btn-wrapper text-center">
                        <a href="#" class="btn btn-type5">Sign Up Today!</a>
                    </div>

                </div><!-- col -->

            </div><!-- .row -->

        </div><!-- container -->

    </div><!-- .wrapper -->

</div><!-- #about-intro -->


<!-- About Pricing -->
<div id="about-pricing" class="section">

    <div class="wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12 text-center">

                    <h2 class="section-title primary-color font-family-secondary">Subcription Info</h2>
                    <p>There are two subscription options for PediaWise. Get Wise about them here.</p>

                </div><!-- col -->

            </div><!-- .row -->

            <div class="row">

                <div class="col-12 col-md-6">

                    <div class="price-wrapper">
                        <ul class="subscription-info">
                            <li>
                                <h4 class="primary-color font-family-secondary">Freebies</h4>
                                <h6>Handy charts and helpful info.</h6>
                            </li>
                            <li>
                                <h4 class="primary-color font-family-secondary">Pediafeed</h4>
                                <h6>Important news alerts and featured disease topics.</h6>
                            </li>
                            <li>
                                <h4 class="primary-color font-family-secondary">Pertinent PediaFlashes</h4>
                                <h6>Relevant pediatric reminders and notifications delivered to your inbox.</h6>
                            </li>
                            <li>
                                <h4 class="primary-color font-family-secondary">Full Access to All Website Content</h4>
                                <h6>The website content is searchable and covers nearly 1,000 topics (and growing!).</h6>
                            </li>
                            <li>
                                <h4 class="primary-color font-family-secondary">Customizable Weekly Newsletter</h4>
                                <h6><span>(Delivered to your Inbox on Mondays)</span>These newsletters will guide you through your pregnancy and the first 3 years of your child’s life.</h6>
                            </li>
                            <li>
                                <h4 class="primary-color font-family-secondary">Question of the Week</h4>
                                <h6><span>(For Pregnancy and the First Year of Life)</span>Answers to common questions asked by subscribers. You can submit a question too! Find the Question of the Week in your inbox on Fridays.</h6>
                            </li>
                        </ul>
                    </div>

                </div><!-- col -->

                <div class="col-12 col-md-3">

                    <div class="price-wrapper">
                        <div class="price-table">
                            <div class="price-table-head">
                                <h3 class="primary-color font-family-secondary text-center">Free Membership</h3>
                            </div><!-- .price-table-head -->
                            <div class="price-table-body">
                                <ul>
                                    <li><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/elephant.png" /></li>
                                    <li><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/elephant.png" /></li>
                                    <li><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/elephant.png" /></li>
                                </ul>
                            </div><!-- .price-table-body -->                            
                            <div class="price-table-foot">
                                <a href="#" class="btn">Signup</a>
                            </div><!-- .price-table-foot -->
                        </div><!-- .price-table -->
                    </div>

                </div><!-- col -->

                <div class="col-12 col-md-3">

                    <div class="price-wrapper">
                        <div class="price-table">
                            <div class="price-table-head">
                                <h3 class="primary-color font-family-secondary text-center">Premium Membership</h3>
                                <h5 class="text-center">$5.95/month or $60/year</h5>
                            </div><!-- .price-table-head -->
                            <div class="price-table-body">
                                <ul>
                                    <li><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/elephant.png" /></li>
                                    <li><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/elephant.png" /></li>
                                    <li><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/elephant.png" /></li>
                                </ul>
                            </div><!-- .price-table-body -->                            
                            <div class="price-table-foot">
                                <a href="#" class="btn">Signup</a>
                            </div><!-- .price-table-foot -->
                        </div><!-- .price-table -->
                    </div>

                </div><!-- col -->

            </div><!-- .row -->

        </div><!-- container -->

    </div><!-- .wrapper -->

</div><!-- #about-intro -->


<!-- Meet the Doctor -->
<div id="meet-the-doctor" class="section">

    <div class="wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12 col-md-6">

                    <div class="doctor-avatar d-flex align-items-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doctor.png" />
                    </div><!-- .doctor-avatar -->

                </div><!-- col -->

                <div class="col-12 col-md-6">

                    <div class="doctor-info">
                        <h2 class="primary-color section-title font-family-secondary">Meet the Doctor</h2>
                        <p>Hi! My name is Dr. Blair Farr and I’m a board-certified pediatrician and mother of two based in Washington, D.C. I went to Princeton for college, Georgetown University for medical school, and stayed at Medstar Georgetown Hospital for my pediatric residency. I have a special interest in kids with chronic medical issues and in helping parents (and other caregivers) navigate the ups and downs of raising children. I’m an animal lover, sports enthusiast, and certified mindfulness instructor. </p>

                        <p class="primary-color">My Goals with PediaWise are to:</p>
                        <ol>
                            <li>Offer an insider’s perspective on how prenatal healthcare providers and pediatricians approach healthcare issues.</li>
                            <li>Keep parents informed about current medical info in an easy, low-stress way.</li>
                            <li>Build a community of caregivers who raise each other up within an inclusive and judgement-free space.</li>
                        </ol>
                        <p>It does take a village to raise a child and I hope to create one through PediaWise!</p>
                    </div><!-- .doctor-info -->

                </div><!-- col -->

            </div><!-- .row -->

        </div><!-- container -->

    </div><!-- .wrapper -->

</div><!-- #meet-the-doctor -->


<!-- Gift -->
<div id="gift-section" class="section">

    <div class="wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12 col-md-6">

                   <h2 class="light-color section-title font-family-secondary">Gift PediaWise Today!</h2>
                   <p>Looking for a baby shower gift or a gift for sleep-deprived parents?</p>
                   <a href="#" class="primary-color">Give the Gift of Wisdom Today!</a>

                </div><!-- col -->

            </div><!-- .row -->

        </div><!-- container -->

    </div><!-- .wrapper -->

</div><!-- #gift-section -->


<!-- How Pediawise was born -->
<div id="how-pediawise" class="section">

    <div class="wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                   <h2 class="primary-color section-title font-family-secondary text-center">How PediaWise was Born</h2>

                </div><!-- col -->

            </div><!-- .row -->

            <div class="row how-pediawise-need">

                <div class="col-12 col-md-6">

                    <div class="how-pediawise-content">    
                        <h3 class="secondary-color">The Need:</h3>
                        <p>As both a pediatrician and mother of two, I understand the need for legitimate, accessible, and fun-to-read information about pregnancy and child health.</p>
                    </div>

                </div><!-- col -->

                <div class="col-12 col-md-6">

                    <div class="how-pediawise-img">
                        <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/how-pediawise-ribon1.png" /></figure>
                    </div>

                </div><!-- col -->

            </div><!-- .row -->

            <div class="row how-pediawise-problem">

                <div class="col-12 col-md-6">

                    <div class="how-pediawise-img">
                        <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/how-pediawise-ribon2.png" /></figure>
                    </div>

                </div><!-- col -->

                <div class="col-12 col-md-6">

                    <div class="how-pediawise-content">    
                        <h3 class="secondary-color">The Problem:</h3>
                        <h4>The Internet Can Be a Double-Edged Sword</h4>
                        <p>Studies show that most parents turn to the internet when seeking information about their child's health. But searching the internet for solutions to pregnancy issues and children's medical problems is like going down an anxiety-inducing rabbit hole; there's too much info in too many different places, and much of it is conflicting and from unverified sources. It's even hard for OB/GYNs and pediatricians to keep up!</p>
                        <p>To make matters worse, 80% of people who Google information don’t bother to check the source of the info they’re reading.</p>
                        <h4>Health Searches are a Time Suck</h4>
                        <p>Internet health searches are time-consuming and often lead to more questions than answers. Plus, medical info can be pretty boring to read.</p>
                        <h4>Doctor’s Visits Don’t Always Cut It</h4>
                        <p>It’s hard for pediatricians to cram all the information they want to impart into a 15-minute visit (the average length of a pediatric visit in the U.S. is 16.4 minutes). Moreover, as a parent, it’s difficult to fully retain what is said during the visit and to feel like all of your questions have been answered.</p>
                        <h4>The Doctor Is Not Always In</h4>
                        <p>As much as pediatricians want to be available to their patients outside of the office visits, there are usually too many patients and not enough hours in the day. In addition, parents are often afraid to "bother" the doc with "non-urgent" questions.</p>
                    </div>

                </div><!-- col -->

            </div><!-- .row -->

            <div class="row how-pediawise-solution">

                <div class="col-12 col-md-6">

                    <div class="how-pediawise-content">    
                        <h3 class="secondary-color">The Solution:</h3>
                        <p><strong>PediaWise</strong> - a one-stop shop for trustworthy and easy-to-read prenatal and pediatric information that’s researched, edited, and written by a board-certified pediatrician.</p>
                    </div>

                </div><!-- col -->

                <div class="col-12 col-md-6">

                    <div class="how-pediawise-img">
                        <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/how-pediawise-ribon3.png" /></figure>
                    </div>

                </div><!-- col -->

            </div><!-- .row -->

        </div><!-- container -->

    </div><!-- .wrapper -->

</div><!-- #how-pediawise -->


<!-- Subscription -->
<div class="newsletter-section section">

    <div class="wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 d-flex align-items-center newsletter-content">
                    
                    <div class="text-center">
                        <h2 class="white-color font-family-secondary">Get Wise About Your Pregnancy and Your Child’s Health by Subscribing to PediaWise Today.</h2>
                        <a href="#" class="btn btn-type3 btn-bg-color-light">Subscribe</a>
                    </div>

                </div><!-- col -->

            </div><!-- .row -->

        </div><!-- container -->

    </div><!-- .wrapper -->

</div><!-- .newsletter-section -->


<!-- FAQs -->
<div class="faqs-section section">

    <div class="wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12 text-center">

                    <h2 class="secondary-color section-title font-family-secondary">FAQs</h2>

                </div><!-- col -->

            </div><!-- .row -->

            <div class="row">

                <div class="col-12 col-md-10 offset-lg-1">
                    
                    <ul class="faqs">
                        <li>
                            <a href="javascript:void(0);">What is PediaWise?</a>    
                        </li>
                        <li>
                            <a href="javascript:void(0);">What is PediaWise?</a>    
                        </li>
                        <li>
                            <a href="javascript:void(0);">What is PediaWise?</a>    
                        </li>
                    </ul>

                </div><!-- col -->

            </div><!-- .row -->

        </div><!-- container -->

    </div><!-- .wrapper -->

</div><!-- .faqs-section -->

<?php get_footer(); ?>
