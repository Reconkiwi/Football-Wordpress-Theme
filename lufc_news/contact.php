<?php
/**
 * The main template file
 * Template Name: contact
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

        <?php $contact_background_header_image = get_field( 'contact_background_header_image' ); ?>
        <?php if ( $contact_background_header_image ) { ?>
        <header class="about-header-cont" style="background-image: url('<?php echo $contact_background_header_image['url']; ?>')">
            <?php } ?>


            <h1 class="about-title">
                <?php the_field( 'contact-title' ); ?>
            </h1>
        </header>

<section class="contact_holder">
  <div class="container-full">
      <div class="grid">
        <div class="col-12 contact_wrapper">
          <div class="col-6">

            <div class="contact_info">
              <div class="info">
              <?php the_field( 'contact_info' ); ?>
              </div>
              <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=worthing%20woodsdale%20court%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/webdesign-essen/"></a></div>
              </div>
            </div>
          </div>

          <div class="col-6">
            <div class="app-contact-form">
              <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]"'); ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<!--
<div class="contact_holder">
<div class="grid">
<div class="col-12">
  <div class="col-6">
    <div class="info">
      <div class="contact_info">
  <?php the_field( 'contact_info' ); ?>
  <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=worthing%20woodsdale%20court%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/webdesign-essen/"></a></div>
</div>
  </div>
</div>
</div>
  <div class="col-6">
    <div class="app-contact-form">
    <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]"'); ?>
  </div>
</div>
</div>
</div>
</div> -->
    </main>
</div>

<?php get_footer();
