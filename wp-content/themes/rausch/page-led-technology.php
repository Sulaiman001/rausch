<?php
    get_header();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>
<article class="led-head" data-type="background" data-background="<?php echo($image[0]); ?>">

  <section class="centerpiece">
      <h1>LED Technology</h1>
      <p><?php echo($post->post_content); ?></p>
  </section>

</article>

<article class="led-products">

    <section class="featured col-6-12" data-type="background" data-background="<?php echo(get_template_directory_uri().'/img/country-screen.jpg'); ?>">
        <a href="/rausch/led-technology/mobile-led-screens">
          <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icon/mobile-led-screens.png" />
        </a>
        <h2>Mobile LED Screens</h2>
    </section>
    <section class="featured col-6-12" data-type="background" data-background="<?php echo(get_template_directory_uri().'/img/concert-video-wall.jpg'); ?>">
        <a href="/rausch/led-technology/video-walls">
          <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/icon/led-walls.png" />
        </a>
        <h2>Video Walls</h2>
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
<?php get_footer(); ?>
