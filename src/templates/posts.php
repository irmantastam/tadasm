<?php
  /*
  Template Name: Posts
  */
?>

  <?php get_header(); ?>

  <main class="main main--posts">
    <h1><?php _e('My latest posts', 'es-blank'); ?></h1>
    <section class="section section--posts">
      <?php foreach (get_posts() as $post) : ?>
        <div class="post">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </div>
      <?php endforeach; ?>
    </section>
  </main>

<?php get_footer(); ?>