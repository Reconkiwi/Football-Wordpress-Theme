<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">
				<div class="grid">
					<div class="col-12">

						<?php while ( have_posts() ) : the_post(); ?>

							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>

						<?php endwhile; ?>

						<ul class="social-media-links">
				        <li>

				              <a href="<?php echo the_field('facebook-homepage'); ?>"><i class="fab fa-facebook-square"></i></a></li>

				        <li>

				            <a href="<?php echo the_field('twitter-homepage'); ?>"><i class="fab fa-twitter-square"></i></a></li>

				        <li>

				            <a href="<?php echo the_field('instagram-homepage'); ?>"><i class="fab fa-instagram"></i></a></li>

				        <li>

				            <a href="<?php echo the_field('youtube-homepage'); ?>"><i class="fab fa-youtube-square"></i></a></li>

				    </ul>

					</div>
				</div>
			</div>

		</main>
	</div>

<?php get_footer(); ?>
