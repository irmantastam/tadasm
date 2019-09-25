<?php get_header(); ?>

<main role="main" aria-label="Content">
  <section>
    <article id="post-404">
      <h1><?php esc_html_e('Page not found', 'es-blank'); ?></h1>
      <h4>
        <a href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e('Return home?', 'es-blank'); ?></a>
      </h4>
    </article>
  </section>
</main>

<?php get_footer(); ?>
