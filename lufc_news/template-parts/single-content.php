<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lufc_News
 */

?>

<div class="single-article-holder">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php
		if ( is_singular() ) :
			the_title( '<h1 class="single-entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="single-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
            <div class="entry-meta">
                <?php
				lufc_news_posted_on();
				lufc_news_posted_by();
				?>
            </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="single-img-holder">
            <?php lufc_news_post_thumbnail(); ?>
        </div>

        <div class="single-entry-content">
            <?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lufc_news' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lufc_news' ),
			'after'  => '</div>',
		) );
 
		?>


        </div><!-- .entry-content -->
