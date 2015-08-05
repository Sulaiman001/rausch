<?php
    get_header();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>
<article class="led-head" data-speed="15" data-type="background" data-background="<?php echo($image[0]); ?>">

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
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta.</p>
    </section>
    <section class="featured col-4-12" >
        <h2>Knowledge</h2>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta.</p>    </section>
    <section class="featured col-4-12" >
        <h2>Comittment</h2>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta.</p>    </section>
</article>
<?php get_footer(); ?>
