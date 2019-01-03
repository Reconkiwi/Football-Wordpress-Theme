<?php
/**
 * The main template file
 * Template Name: partners
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

        <?php $partner_background_header_image = get_field( 'partner_background_header_image' ); ?>
        <?php if ( $partner_background_header_image ) { ?>
        <header class="about-header-cont" style="background-image: url('<?php echo $partner_background_header_image['url']; ?>')">
            <?php } ?>


            <h1 class="about-title">
                <?php the_field( 'partner-title' ); ?>
            </h1>
        </header>

        <section class="section1">
          <div class="repeater-cont-hmpg-2">


              <?php if ( have_rows( 'partners-repeater-homepage' ) ) : ?>
              <?php while ( have_rows( 'partners-repeater-homepage' ) ) : the_row(); ?>
              <?php $repeater_homepage_image = get_sub_field( 'repeater-homepage-image-2' ); ?>
              <?php if ( $repeater_homepage_image ) { ?>
              <div class="col-3 icons">
                  <div class="reapeater-feature-block-2">
                      <img class="repeater-img" src="<?php echo $repeater_homepage_image['url']; ?>" alt="<?php echo $repeater_homepage_image['alt']; ?>" />
                      <?php } ?>
                      <h1>
                          <?php the_sub_field( 'repeater-homepage-title-2' ); ?>
                      </h1>
                  </div>
              </div>
              <?php endwhile; ?>
              <?php else : ?>
              <?php // no rows found ?>
              <?php endif; ?>

          </div>

        </section>
    </main>
</div>

<?php get_footer();
