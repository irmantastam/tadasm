<?php get_header(); ?>

<main role="main" aria-label="Content">
  <section class="inner">
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( has_post_thumbnail() ): ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        <?php endif; ?>
        <h1>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h1>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
    <?php else : ?>
      <article>
        <h1><?php esc_html_e( 'Sorry, nothing to display.', 'tadasm' ); ?></h1>
      </article>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>
