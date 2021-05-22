<?php
  /*
  Template Name: Posts
  */
?>

  <?php get_header(); ?>

  <main class="main main--posts posts">
    <div class="inner">
      <h1 class="posts__title"><?php _e('My Latest Articles and Podcasts', 'tadasm'); ?></h1>
      <section class="posts__list">
        <?php foreach (get_posts() as $post) : ?>
          <div class="posts__item">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
          </div>
        <?php endforeach; ?>
      </section>
    </div>
  </main>

<?php get_footer(); ?>