<?php
  /*
  Template Name: Frontpage
  */
?>

<?php
  /*
    Template variables:
  */
  $heroImage = get_field('Hero image');
?>

  <?php get_header(); ?>

  <main class="main main--frontpage frontpage">
    <section class="section section--frontpage">
      <div class="hero-image">
        <img
          class="hero-image__image"
          src="<?php echo $heroImage; ?>"
        />
        <div class="hero-image__text">
          <?php _e("I help people feel better, move better and perform better", "es-blank"); ?>
        </div>
      </div>
    </section>
    <?php if (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endif; ?>
  </main>

<?php get_footer(); ?>