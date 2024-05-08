<!-- show post detail -->

<?php
  get_header();
?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/ocean.jpg') ?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Welcome Our Blog Posts</h1>
    <div class="page-banner__intro">
      <p>Keep up with latest news</p>
    </div>
  </div>
</div>

<?php
  if(have_posts()){
    while(have_posts()){
      the_post();
      ?>
        
      <?php
    }
  }
?>

<?php
  get_footer();
?>