<?php get_header(); ?>

<main role="main" aria-label="Content">
  <section>
    <?php if ( have_posts() ): the_post(); ?>
      <h1><?php esc_html_e( 'All posts from ', 'tadasm.lt' ); echo get_the_author(); ?></h1>
      <?php if ( get_the_author_meta('description')): ?>
      <?php echo get_avatar(get_the_author_meta('user_email')); ?>
      <h2><?php esc_html_e('About ', 'tadasm.lt'); echo get_the_author(); ?></h2>
      <?php echo wpautop(get_the_author_meta('description')); ?>
    <?php endif; ?>
    <?php rewind_posts(); while(have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if (has_post_thumbnail()): ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(array(120, 120)); ?>
          </a>
        <?php endif; ?>
        <h2>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h2>
        <span class="date">
          <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
            <?php the_date(); ?> <?php the_time(); ?>
          </time>
        </span>
        <span class="author"><?php esc_html_e( 'Published by', 'tadasm.lt' ); ?> <?php the_author_posts_link(); ?></span>
        <?php the_excerpt(); ?>
      </article>
    <?php endwhile; ?>
    <?php else : ?>
      <article>
        <h2><?php esc_html_e('Sorry, nothing to display.', 'tadasm.lt'); ?></h2>
      </article>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>
