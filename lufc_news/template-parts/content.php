<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lufc_News
 */

?>

<div class="article-holder">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php lufc_news_post_thumbnail(); ?>

        <div class="entry-content">


            <header class="entry-header">
                <?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :  
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
                <?php endif; ?>
            </header><!-- .entry-header -->

        </div><!-- .entry-content -->


    </article><!-- #post-<?php the_ID(); ?> -->
</div>
