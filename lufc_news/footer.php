<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lufc_News
 */

?>


<footer id="colophon" class="site-footer">


    <ul class="social-media-links">
        <li>

              <a href="<?php echo the_field('facebook-homepage', 'option'); ?>"><i class="fab fa-facebook-square"></i></a></li>

        <li>

            <a href="<?php echo the_field('twitter-homepage', 'option'); ?>"><i class="fab fa-twitter-square"></i></a></li>

        <li>

            <a href="<?php echo the_field('instagram-homepage', 'option'); ?>"><i class="fab fa-instagram"></i></a></li>

        <li>

            <a href="<?php echo the_field('youtube-homepage', 'option'); ?>"><i class="fab fa-youtube-square"></i></a></li>
        
    </ul>

    <div class="footer-menu">
        <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'menu-2-menu',
			) );
			?>
    </div>
    <p>
        <?php the_field( 'footer-copyright' ); ?>
    </p>
    <!-- .sit
e-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>

</html>
