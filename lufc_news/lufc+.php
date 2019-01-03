<?php
/**
 * The main template file
 * Template Name: lufc+
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

        <?php $lufc_background_header_image = get_field( 'lufc_background_header_image' ); ?>
        <?php if ( $lufc_background_header_image ) { ?>
        <header class="about-header-cont" style="background-image: url('<?php echo $lufc_background_header_image['url']; ?>')">
            <?php } ?>


            <h1 class="about-title">
                <?php the_field( 'lufc_title' ); ?>
            </h1>
        </header>
        <h1 class="football_league_name">
          <?php the_field( 'football_league_title_holder' ); ?>
        </h1>

        <section class="section1">
            <div class="about-bulk-texct-cont">
                <?php the_field( 'about-section-1' ); ?>
            </div>
        </section>

      <div class="league_table">
      <?php echo do_shortcode("[soccer-info id='20' type='table']"); ?>
    </div>

<section class="lufc_section_2">
    <?php $lufc_background_header_image_2 = get_field( 'lufc_background_header_image_2' ); ?>
    <?php if ( $lufc_background_header_image_2 ) { ?>
    <div class="about-header-2" style="background-image: url('<?php echo $lufc_background_header_image_2['url']; ?>')">
        <?php } ?>
        <h1>
            <?php the_field( 'lufc_header_2' ); ?>
        </h1>
    </div>

          <div class="fixture_repeater_cont">
        <?php if ( have_rows( 'fixture_repeater' ) ) : ?>
        <?php while ( have_rows( 'fixture_repeater' ) ) : the_row(); ?>
        <div class="col-3 icons">
            <div class="fixture_repeater-feature-block">
                <h1>
                    <?php the_sub_field( 'fixture_repeater_date' ); ?>
                </h1>
                <h1>
                  -
                </h1>
                <h1>
                    <?php the_sub_field( 'fixture_repeater_opponent' ); ?>
                </h1>
                <h1>
                  -
                </h1>
                <h1>
                    <?php the_sub_field( 'fixture_repeater_home_or_away' ); ?>
                </h1>
            </div>
</div
        <?php endwhile; ?>
        <?php else : ?>
        <?php // no rows found ?>
        <?php endif; ?>

    </div>
      </section>
      <section class="lufc_section_3">
        <?php $lufc_background_header_image_2 = get_field( 'lufc_background_header_image_2' ); ?>
        <?php if ( $lufc_background_header_image_2 ) { ?>
        <div class="about-header-2" style="background-image: url('<?php echo $lufc_background_header_image_2['url']; ?>')">
            <?php } ?>
            <h1>
                <?php the_field( 'lufc_header_3' ); ?>
            </h1>
        </div>
        <div class="manager_slider">

          <?php echo do_shortcode("[URIS id=500]"); ?>
</div>
<div class="container">
<div class="row">
<div class="col-5">
<?php the_field( 'manger_description' ); ?>
</div>
</div>
</div>

<div class="lufc_repeater_titles">
<h1><?php the_field( 'attackers_repeater_title' ); ?></h1>
</div>
<div class="about-repeater-cont-hmpg-2">


    <?php if ( have_rows( 'players_repeater_attackers' ) ) : ?>
    <?php while ( have_rows( 'players_repeater_attackers' ) ) : the_row(); ?>
    <?php $player_image = get_sub_field( 'player_image' ); ?>
    <?php if ( $player_image ) { ?>
    <div class="col-3 icons">
        <div class="about-reapeater-feature-block-2">
            <img class="about-repeater-img" src="<?php echo $player_image['url']; ?>" alt="<?php echo $player_image['alt']; ?>" />
            <?php } ?>
            <h1>
                <?php the_sub_field( 'player_name' ); ?>
            </h1>
          </div>
        </div>

    <?php endwhile; ?>
    <?php else : ?>
    <?php // no rows found ?>
    <?php endif; ?>

</div>

<div class="lufc_repeater_titles">
<h1><?php the_field( 'mids_repeater_title' ); ?></h1>
</div>
<div class="about-repeater-cont-hmpg-2">


    <?php if ( have_rows( 'players_repeater_mids' ) ) : ?>
    <?php while ( have_rows( 'players_repeater_mids' ) ) : the_row(); ?>
    <?php $player_image = get_sub_field( 'player_image' ); ?>
    <?php if ( $player_image ) { ?>
    <div class="col-3 icons">
        <div class="about-reapeater-feature-block-2">
            <img class="about-repeater-img" src="<?php echo $player_image['url']; ?>" alt="<?php echo $player_image['alt']; ?>" />
            <?php } ?>
            <h1>
                <?php the_sub_field( 'player_name' ); ?>
            </h1>
          </div>
        </div>

    <?php endwhile; ?>
    <?php else : ?>
    <?php // no rows found ?>
    <?php endif; ?>

</div>

<div class="lufc_repeater_titles">
<h1><?php the_field( 'goalkeepers_repeater_title' ); ?></h1>
</div>
<div class="about-repeater-cont-hmpg-2">



    <?php if ( have_rows( 'players_repeater_goalkeepers' ) ) : ?>
    <?php while ( have_rows( 'players_repeater_goalkeepers' ) ) : the_row(); ?>
    <?php $player_image = get_sub_field( 'player_image' ); ?>
    <?php if ( $player_image ) { ?>
    <div class="col-3 icons">
        <div class="about-reapeater-feature-block-2">
            <img class="about-repeater-img" src="<?php echo $player_image['url']; ?>" alt="<?php echo $player_image['alt']; ?>" />
            <?php } ?>
            <h1>
                <?php the_sub_field( 'player_name' ); ?>
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

<?php get_footer(); ?>
