<?php
/**
 * The main template file
 * Template Name: privacy
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

        <?php $privacy_background_header_image = get_field( 'privacy_background_header_image' ); ?>
        <?php if ( $privacy_background_header_image ) { ?>
        <header class="about-header-cont" style="background-image: url('<?php echo $privacy_background_header_image['url']; ?>')">
            <?php } ?>


            <h1 class="about-title">
                <?php the_field( 'privacy-title' ); ?>
            </h1>
        </header>

        <section class="section1">
            <div class="about-bulk-texct-cont">
                <?php the_field( 'privacy-section-1' ); ?>
            </div>
        </section>
    </main>
</div>

<?php get_footer();
