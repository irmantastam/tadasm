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
  $heroVideo = get_field('hero_video');
  $heroText = get_field('hero_text');
  $heroQuotes = get_field('hero_quotes');

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
        <?php if ($heroVideo): ?>
          <video poster="<?php echo $heroImage; ?>" class="hero-image__video" playsinline autoplay muted loop>
            <source src="<?php echo $heroVideo; ?>" type="video/mp4">
          </video>
        <?php elseif ($heroImage): ?>
          <img
            class="hero-image__image"
            src="<?php echo $heroImage; ?>"
          />
        <?php endif; ?>
        <div class="hero-image__text">
          <?php if ($heroText): echo $heroText; ?>
          <?php elseif ($heroQuotes):?>
            <?php 
              $quotes = explode(PHP_EOL, $heroQuotes);
              $randQuote = rand(0, sizeOf($quotes) - 1);
              echo $quotes[$randQuote];
            ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="greeting">
        <div class="greeting__image">
          <img
            src="<?php echo $greetingPhoto; ?>"
          />
        </div>
        <div class="greeting__text">
          <h1 class="greeting__title">
            <?php echo $greetingLabel; ?>
          </h1>
          <p class="greeting__body">
            <?php echo $greetingText ?>
          </p>
          <a class="greeting__link" href="<?php echo $greetingLink; ?>">
            <?php echo $greetingLinkText; ?>
          </a>
        </div>
      </div>
    </section>
    <?php if (have_posts()) : the_post(); ?>
      <div class="content">
        <?php the_content(); ?>
      </div>
    <?php endif; ?>
  </main>

<?php get_footer(); ?>