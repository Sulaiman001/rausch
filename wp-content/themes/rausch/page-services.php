<?php
    get_header();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>
<article class="service-head" data-type="background" data-background="<?php echo($image[0]); ?>">

  <section class="centerpiece">
      <h1>Our Services</h1>
      <p><?php echo($post->post_content); ?></p>
  </section>
  <ul class="icon-display">
      <li class='col-2-12'>
          <a class="event-management" href="/rausch/services/event-management">
              <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icon/event-management.png" />
          </a>
      </li>
      <li class='col-2-12'>
          <a class="live-event-production" href="/rausch/services/live-event-production">
              <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icon/live-event-production.png" />
          </a>
      </li>
      <li class='col-2-12'>
          <a class="video-production" href="/rausch/services/video-production">
              <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icon/video-production.png" />
          </a>
      </li>
      <li class='col-2-12'>
          <a class="special-events" href="/rausch/services/special-events">
              <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icon/special-events.png" />
          </a>
      </li>
      <li class='col-2-12'>
          <a class="rentals" href="/rausch/services/rentals">
              <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icon/mobile-led-screens.png" />
          </a>
      </li>
  </ul>

</article>

<article class="approach">

    <section class="centerpiece">
      <h1 class="secondary-heading">Our Strategic Approach</h1>
      <p><?php echo(get_post_meta($post->ID, 'strategic_approach')[0]); ?></p>
    </section>

    <section class="featured col-4-12" >
        <h2>Enhance</h2>
        <p><?php echo(get_post_meta($post->ID, 'enhance')[0]); ?></p>
    </section>
    <section class="featured col-4-12" >
        <h2>Engage</h2>
        <p><?php echo(get_post_meta($post->ID, 'engage')[0]); ?></p>
    </section>
    <section class="featured col-4-12" >
        <h2>Entertain</h2>
        <p><?php echo(get_post_meta($post->ID, 'entertain')[0]); ?></p>
    </section>

    <a href="/rausch/contact"><button><?php echo(get_post_meta($post->ID, 'approach_button')[0]); ?></button></a>

</article>

<article class="testimonial" data-type="background" data-background="<?php echo(wp_get_attachment_url(get_post_meta($post->ID, 'background_image')[0])); ?>">
    <section class="centerpiece">
        <h3 class="blockquote"><?php echo(get_post_meta($post->ID, 'testimonial')[0]); ?></h3>
        <p>-<?php echo(get_post_meta($post->ID, 'testifier')[0]); ?></p>
        <p><?php echo(get_post_meta($post->ID, 'job_title')[0]); ?></p>
    </section>
</article>

<article class="trifecta">
    <section class="centerpiece">
        <h1 class="secondary-heading">Why Choose Rausch?</h1>
    </section>
    <section class="featured col-4-12">
        <h2>Experience</h2>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta.</p>
    </section>
    <section class="featured col-4-12" >
        <h2>Knowledge</h2>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta.</p>
    </section>
    <section class="featured col-4-12" >
        <h2>Comittment</h2>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta.</p>
    </section>
</article>
<?php get_footer(); ?>
