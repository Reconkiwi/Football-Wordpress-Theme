<?php
/**
 * The main template file
 * Template Name: news
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


        <?php $news_page_background_image = get_field( 'news_page_background_image' ); ?>
        <?php if ( $news_page_background_image ) { ?>
        <header class="news-header-cont" style="background-image: url('<?php echo $news_page_background_image['url']; ?>')">
            <?php } ?>

            <h1 class="news-title">
                <?php single_post_title(); ?>
            </h1>
        </header>

        <?php 
	   // the query
	   $the_query = new WP_Query( array(
	      'posts_per_page' => 30
	   )); 
	?>

        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="article-holder">

            <article>
                <a href="<?php the_permalink(); ?>">
                    <div class="news-image" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
                    </div>
                    <div class="entry-content">
                </a>

                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>
        </div>
        </article>
</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php endif; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer(); ?>
