<?php
/*
Template Name: Events
*/

?>
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

      <div class="event-summary">
        <a class="event-summary__date t-center" href="#">
          <span class="event-summary__month">Mar</span>
          <span class="event-summary__day">25</span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
          <p>Bring poems you’ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="nu gray">Learn more</a></p>
        </div>
      </div>
      <div class="event-summary">
        <a class="event-summary__date t-center" href="#">
          <span class="event-summary__month">Apr</span>
          <span class="event-summary__day">02</span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
          <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="nu gray">Learn more</a></p>
        </div>
      </div>

      <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>
    </div>
  </div>
</div>


<?php
  get_footer();
?>