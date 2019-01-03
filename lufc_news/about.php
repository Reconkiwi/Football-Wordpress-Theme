<?php
/**
 * The main template file
 * Template Name: about
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

        <?php $about_background_header_image = get_field( 'about_background_header_image' ); ?>
        <?php if ( $about_background_header_image ) { ?>
        <header class="about-header-cont" style="background-image: url('<?php echo $about_background_header_image['url']; ?>')">
            <?php } ?>


            <h1 class="about-title">
                <?php the_field( 'about-title' ); ?>
            </h1>
        </header>

        <section class="section1">
            <div class="about-bulk-texct-cont">
                <?php the_field( 'about-section-1' ); ?>
            </div>
        </section>


        <section class="section2">
            <?php $about_background_header_image_copy_2 = get_field( 'about_background_header_image_copy_2' ); ?>
            <?php if ( $about_background_header_image_copy_2 ) { ?>
            <div class="about-header-2" style="background-image: url('<?php echo $about_background_header_image_copy_2['url']; ?>')">
                <?php } ?>
                <h1>
                    <?php the_field( 'about-header-2' ); ?>
                </h1>
            </div>
            <div class="about-repeater-cont-hmpg-2">


                <?php if ( have_rows( 'about-meettheteam-repeater' ) ) : ?>
                <?php while ( have_rows( 'about-meettheteam-repeater' ) ) : the_row(); ?>
                <?php $repeater_homepage_image = get_sub_field( 'meet_the_team_img' ); ?>
                <?php if ( $repeater_homepage_image ) { ?>
                <div class="col-3 icons">
                    <div class="about-reapeater-feature-block-2">
                        <img class="about-repeater-img" src="<?php echo $repeater_homepage_image['url']; ?>" alt="<?php echo $repeater_homepage_image['alt']; ?>" />
                        <?php } ?>
                        <h1>
                            <?php the_sub_field( 'meet_the_team_name' ); ?>
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
