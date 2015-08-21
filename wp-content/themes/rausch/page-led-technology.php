<?php
    get_header();
    $led_page_args = array(
        'post_type' =>      'page',
        'numberposts'=>     -1,
        'posts_per_page'=>  -1,
        'post_status'=>     'publish',
        'pagename'=>        'led-technology'
    );
    $led_page = new WP_Query( $led_page_args );
    if ( $led_page->have_posts() ) while ( $led_page->have_posts() ) : $led_page->the_post();
?>
<article class="video-intro led">

  <div class="mask-container">
    <video loop muted id="bgvid">
      <source src="<?php the_field('header_video') ?>" type="video/mp4">
    </video>
  </div>

  <section class="centerpiece intro-header">
      <h1>LED Technology</h1>
      <?php the_content(); ?>
  </section>

</article>

<article class="led-products">

    <section class="featured col-6-12" data-type="background" data-background="<?php echo(get_template_directory_uri().'/img/country-screen.jpg'); ?>">
        <a href="/rausch/led-technology/mobile-led-screens">
          <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icon/mobile-led-screens.png" />
        </a>
        <h2 class="project-title">Mobile LED Screens</h2>
    </section>
    <section class="featured col-6-12" data-type="background" data-background="<?php echo(get_template_directory_uri().'/img/concert-video-wall.jpg'); ?>">
        <a href="/rausch/led-technology/video-walls">
          <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icon/led-walls.png" />
        </a>
        <h2 class="project-title">Video Walls</h2>
    </section>

</article>

<article class="trifecta">
    <section class="centerpiece">
        <h1>Why Choose Rausch?</h1>
    </section>
    <section class="featured col-4-12">
        <h2>Experience</h2>
        <p>With over 15+ years of experience in event management,  live event production, video production, special events and LED technology, Rausch understands the business inside and out.</p>
    </section>
    <section class="featured col-4-12" >
        <h2>Knowledge</h2>
        <p>By staying on top of the newest technology and equipment, our talented crew maintains the experience and knowledge needed to run successful events and productions.</p>
    </section>
    <section class="featured col-4-12" >
        <h2>Commitment</h2>
        <p>Our first priority is helping you create the best live event experience from start to finish. Our commitment to see your event run successfully from start to finish is what makes Rausch Productions the best in the business.</p>
    </section>
</article>
<?php 
    endwhile;
    get_footer(); 
?>
