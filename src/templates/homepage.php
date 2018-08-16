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

  <main class="main main--frontpage">
    <section class="section section--frontpage">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="hero-image">
          <img
            class="hero-image__image"
            src="<?php echo $heroImage; ?>"
          />
        </div>
      </article>
    </section>
  </main>

<?php get_footer(); ?>