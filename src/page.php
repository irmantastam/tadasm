<?php get_header(); ?>

  <main>
    <section>
      <div class="inner">
        <h1><?php the_title(); ?></h1>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_content(); ?>
            <?php comments_template('', true); ?>
          </article>
        <?php endwhile; ?>
        <?php else: ?>
          <article>
            <h2><?php _e('Sorry, nothing to display.', 'tadasm.lt'); ?></h2>
          </article>
        <?php endif; ?>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
