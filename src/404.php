<?php get_header(); ?>

<main role="main" aria-label="Content">
  <section class="inner">
    <article id="post-404">
      <h1><?php esc_html_e('Page not found', 'tadasm'); ?></h1>
      <h4>
        <a href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e('Return home?', 'tadasm'); ?></a>
      </h4>
    </article>
  </section>
</main>

<?php get_footer(); ?>
