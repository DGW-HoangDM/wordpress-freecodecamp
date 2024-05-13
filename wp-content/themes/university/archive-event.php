<!-- show all post type event -->
<?php
get_header();
?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/ocean.jpg') ?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_archive_title(); ?></h1>
    <div class="page-banner__intro">
      <p><?php the_archive_description(); ?></p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post(); ?>
      <div class="event-summary">
        <a class="event-summary__date t-center" href="<?php echo get_permalink(); ?>">
          <?php
            // Load field value.
            $date = new DateTime(get_field( 'event_time' ));
          ?>
          <span class="event-summary__month"><?php echo esc_html($date->format( 'M' )); ?></span>
          <span class="event-summary__day"><?php echo esc_html($date->format( 'd' )); ?></span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
          <p><?php echo wp_trim_words(get_the_content(), 10, '...'); ?><a href="<?php echo get_permalink(); ?>" class="nu gray">Learn more</a></p>
        </div>
      </div>
  <?php
    }
  }
  ?>
  <?php the_posts_pagination(); ?>
</div>

<?php
get_footer();
?>