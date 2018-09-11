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
      <div class="greeting">
        <img
          class="greeting__image"
          src="<?php echo get_template_directory_uri(); ?>/assets/images/tadas.jpg"
        />
        <div class="greeting__text">
          <h1> <?php _e('Hi, I\'m Tadas'); ?> </h1>
          <p><?php _e("I help people feel better, move better and perform better, this is my soon to be great website.", "es-blank"); ?></p>
          <h3><a href='/posts'><?php _e("See my latest articles", "es-blank"); ?></a></h3>
        </div>
      </div>
    </section>
    <?php if (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endif; ?>
  </main>

<?php get_footer(); ?>