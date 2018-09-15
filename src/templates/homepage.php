<?php
  /*
  Template Name: Frontpage
  */
?>

<?php
  /*
    Template variables:
  */
  $heroImage = get_field('hero_image');
  $heroText = get_field('hero_text');

  $greetingPhoto = get_field('greeting_photo');
  $greetingLabel = get_field('greeting_label');
  $greetingText = get_field('greeting_text');
  $greetingLink = get_field('greeting_link');
  $greetingLinkText = get_field('greeting_link_text');
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
          <?php echo $heroText; ?>
        </div>
      </div>
      <div class="greeting">
        <img
          class="greeting__image"
          src="<?php echo $greetingPhoto; ?>"
        />
        <div class="greeting__text">
          <h1> <?php echo $greetingLabel; ?> </h1>
          <p><?php echo $greetingText ?></p>
          <h3><a href="<?php echo $greetingLink; ?>"><?php echo $greetingLinkText; ?></a></h3>
        </div>
      </div>
    </section>
    <?php if (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endif; ?>
  </main>

<?php get_footer(); ?>