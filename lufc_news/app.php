<?php
/**
 * The main template file
 * Template Name: app
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lufc_News
 */

get_header();
?>


<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <header class="app-header-cont">
            <div class="app-header-text">
                <h1 class="app-title">
                    <?php the_field( 'app-title' ); ?>
                </h1>
                <p class="app-title-p">
                    <?php the_field( 'app-title-p' ); ?>
                </p>
                <div class="app-title-list">
                    <?php the_field( 'app-title-list' ); ?>
                </div>
            </div>
            <div class="app-title-img">
                <?php $app_title_phone_image = get_field( 'app_title_phone_image' ); ?>
                <?php if ( $app_title_phone_image ) { ?>
                <img src="<?php echo $app_title_phone_image['url']; ?>" alt="<?php echo $app_title_phone_image['alt']; ?>" />
                <?php } ?>
            </div>
        </header>

        <section class="section2-hmpg">

            <div class="hmpg-section2-cont">
                <h1>Features of the LUFCNEWS app</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in rhoncus odio.</p>
            </div>

            <div class="repeater-cont-hmpg">


                <?php if ( have_rows( 'features-repeater-homepage' ) ) : ?>
                <?php while ( have_rows( 'features-repeater-homepage' ) ) : the_row(); ?>
                <?php $repeater_homepage_image = get_sub_field( 'repeater-homepage-image' ); ?>
                <?php if ( $repeater_homepage_image ) { ?>
                <div class="col-3 icons">
                    <div class="reapeater-feature-block">
                        <img class="repeater-img" src="<?php echo $repeater_homepage_image['url']; ?>" alt="<?php echo $repeater_homepage_image['alt']; ?>" />
                        <?php } ?>
                        <h1>
                            <?php the_sub_field( 'repeater-homepage-title' ); ?>
                        </h1>
                        <p>
                            <?php the_sub_field( 'repeater-homepage-description' ); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <?php // no rows found ?>
                <?php endif; ?>

            </div>

        </section>

        <section class="section_3_app">
          <?php $app_background_header_image_2 = get_field( 'app_background_header_image_2' ); ?>
          <?php if ( $app_background_header_image_2 ) { ?>
          <div class="homepage-header-2" style="background-image: url('<?php echo $app_background_header_image_2['url']; ?>')">
              <?php } ?>
              <h1>
                  <?php the_field( 'app-header-2' ); ?>
              </h1>
          </div>
        </section>
        <section class="contact_holder">
          <div class="container-full">
              <div class="grid">
                <div class="col-12 contact_wrapper">
                  <div class="col-8">

                    <div class="contact_info">
                      <div class="info">
                      <?php the_field( 'contact_info' ); ?>
                      </div>
                      <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=worthing%20woodsdale%20court%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/webdesign-essen/"></a></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="app-contact-form">
                      <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]"'); ?>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>

    </main>
</div>

<?php get_footer();?>
