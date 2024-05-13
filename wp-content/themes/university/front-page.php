<?php
  get_header();
?>

<?php
  get_template_part('template-parts/content', 'header');
?>

<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
      <?php
        // The Query.
        $eventHomepage = new WP_Query( array( 
          'posts_per_page' => 2,
          'post_type' => 'event',
          'order' => 'DESC',
        ) );

        // The Loop.
        if ( $eventHomepage->have_posts() ) {
          while ( $eventHomepage->have_posts() ) {
            $eventHomepage->the_post();
            
            ?>
              <div class="event-summary">
                <a class="event-summary__date t-center" href="<?php echo get_permalink(); ?>">
                  <span class="event-summary__month"><?php the_time('M'); ?></span>
                  <span class="event-summary__day"><?php the_time('d'); ?></span>
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

      <p class="t-center no-margin"><a href="<?php echo home_url() ?>/event" class="btn btn--blue">View All Events</a></p>
    </div>
  </div>
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

      <?php
        // The Query.
        $blogHomepage = new WP_Query( array( 
            'posts_per_page' => 2,
            'post_type' => 'post',
            'order' => 'DESC',
          ) );
        
        // The Loop.
        if ( $blogHomepage->have_posts() ) {
          while ( $blogHomepage->have_posts() ) {
            $blogHomepage->the_post();
            
            ?>
              <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="<?php echo get_permalink(); ?>">
                  <span class="event-summary__month"><?php the_time('M'); ?></span>
                  <span class="event-summary__day"><?php the_time('d'); ?></span>
                </a>
                <div class="event-summary__content">
                  <h5 class="event-summary__title headline headline--tiny"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
                  <p><?php echo wp_trim_words(get_the_content(), 10, '...'); ?><a href="<?php echo get_permalink(); ?>" class="nu gray">Read more</a></p>
                </div>
              </div>
            <?php
          }
        }
      ?>

      <p class="t-center no-margin"><a href="<?php echo home_url() ?>/blog" class="btn btn--yellow">View All Blog Posts</a></p>
    </div>
  </div>
</div>

<div class="hero-slider">
  <div data-glide-el="track" class="glide__track">
    <div class="glide__slides">
      <div class="hero-slider__slide" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/bus.jpg' ?>)">
        <div class="hero-slider__interior container">
          <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center">Free Transportation</h2>
            <p class="t-center">All students have free unlimited bus fare.</p>
            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="hero-slider__slide" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/apples.jpg'?>)">
        <div class="hero-slider__interior container">
          <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center">An Apple a Day</h2>
            <p class="t-center">Our dentistry program recommends eating apples.</p>
            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="hero-slider__slide" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/bread.jpg'?>)">
        <div class="hero-slider__interior container">
          <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center">Free Food</h2>
            <p class="t-center">Fictional University offers lunch plans for those in need.</p>
            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
  </div>
</div>

<?php
  get_footer();
?>