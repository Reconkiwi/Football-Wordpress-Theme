<?php
/**
 * The main template file
 * Template Name: homepage
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

        <header>
            <h1 class="page-title">
                <?php the_field( 'title_home' ); ?> <span style="color: #f8cc49; font-size: 2vw;">...</span></h1>
        </header>

        <?php
        // args
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => '6'

        );

        // get results
        $the_query = new WP_Query( $args );
        // The Loop
        ?>

        <section class="postss">
            <div class="container-full">
                <?php if( $the_query->have_posts() ): ?>
                <div class="grid">
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class=" col-sm-6 col-md-4 col-lg-4 grid-image" style=" background-image: linear-gradient(rgba(2, 51, 94, 0.7), rgba(2, 51, 94, 0.7)),  url('<?php echo the_post_thumbnail_url(''); ?>');">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title();  ?></a>
                    </div>

                    <?php endwhile; ?>
                    <?php endif; wp_reset_query(); ?>
                </div>
            </div>
        </section>
        <h1 class="click-to-see-more">
            <?php $more_news_homepage = get_field( 'more_news_homepage' ); ?>
            <?php if ( $more_news_homepage ) { ?>
            <a href="<?php echo $more_news_homepage['url']; ?>" target="<?php echo $more_news_homepage['target']; ?>">
                <?php echo $more_news_homepage['title']; ?></a>
            <?php } ?>
        </h1>

        <?php $background_header_image_2 = get_field( 'background_header_image_2' ); ?>
        <?php if ( $background_header_image_2 ) { ?>
        <div class="homepage-header-2" style="background-image: url('<?php echo $background_header_image_2['url']; ?>')">
            <?php } ?>
            <h1>
                <?php the_field( 'section_2-homepage' ); ?>
            </h1>
        </div>
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

        <?php $background_header_image = get_field( 'background_header_image' ); ?>
        <?php if ( $background_header_image ) { ?>
        <div class="homepage-header-2" style="background-image: url('<?php echo $background_header_image['url']; ?>')">
            <?php } ?>
            <h1>
                <?php the_field( 'section_3_homepage' ); ?>
            </h1>
        </div>

        <section class="section2-hmpg">
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

        <section class="insta-feed">
            <h1 class="instagram-title"><span>
                    <?php the_field( 'instagram-holder-homepage' ); ?></span></h1>
            <?php echo do_shortcode("[instagram-feed]"); ?>
        </section>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
