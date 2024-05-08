<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/library-hero.jpg' ?>)"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large"><?php echo esc_html( get_field('text-01') ); ?></h1>
    <h2 class="headline headline--medium"><?php echo esc_html( get_field('text-02') ); ?></h2>
    <h3 class="headline headline--small"><?php echo esc_html( get_field('text-03') ); ?></h3>
    
    <?php 
    $link = get_field('link-01');
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="btn btn--large btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
  </div>
</div>