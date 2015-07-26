<?php
    get_header();
    global $post;
    $footer_message = get_post_meta($post->ID, 'footer_message');
    $button_message = get_post_meta($post->ID, 'button_message');
?>
<article class="led-head" data-speed="15" data-type="background" data-background="<?php echo(get_template_directory_uri().'/img/prettylights.jpg'); ?>">

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

    <section class="featured col-4-12">
        <h2><?php echo(get_post_meta($post->ID, 'benefit_a_title')[0]); ?></h2>
        <p><?php echo(get_post_meta($post->ID, 'benefit_a_text')[0]); ?></p>
    </section>
    <section class="featured col-4-12" >
        <h2><?php echo(get_post_meta($post->ID, 'benefit_b_title')[0]); ?></h2>
        <p><?php echo(get_post_meta($post->ID, 'benefit_b_text')[0]); ?></p>
    </section>
    <section class="featured col-4-12" >
        <h2><?php echo(get_post_meta($post->ID, 'benefit_c_title')[0]); ?></h2>
        <p><?php echo(get_post_meta($post->ID, 'benefit_c_text')[0]); ?></p>
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
</main>

<article class="closing-statement">
    <section class="centerpiece">
        <h2><?php echo($footer_message[0]); ?></h2>
        <a href="/rausch/contact"><button><?php echo($button_message[0]); ?></button></a>
    </section>
</article>

<footer>
  <section class="centerpiece">
    <span>Phone: </span><em href="tel:3192949410">319-294-9410</em>
    <h1 class="copyright">&copy; 2015 Rausch Productions, Inc. All Rights Reserved.</h1>
  </section>
</footer>
