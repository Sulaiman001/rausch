<?php
get_header();
$home_page_args = array(
    'post_type' =>      'page',
    'numberposts'=>     -1,
    'posts_per_page'=>  -1,
    'post_status'=>     'publish',
    'pagename'=>        'home'
);
$home_page = new WP_Query( $home_page_args );
if ( $home_page->have_posts() ) while ( $home_page->have_posts() ) : $home_page->the_post();
?>
<article class="video-intro">

  <div class="mask-container">
    <video loop muted id="bgvid">
      <source src="<?php bloginfo('template_directory'); ?>/img/newvid.mp4" type="video/mp4">
    </video>
  </div>

  <section class="halfpiece intro-copy col-5-12">
    <h1><?php the_field('intro_title'); ?></h1>
    <p><?php the_field('intro_message'); ?></p>
    <a href="/rausch/work"><button><?php the_field('intro_button'); ?></button></a>
  </section>

</article>

<article class="service-portal">

  <section class="centerpiece">
      <h2>We Build The Experience From Start To Finish</h2>
      <p><?php the_field('work_message'); ?></p>
      <a href="/rausch/work"><button><?php the_field('work_button'); ?></button></a>
  </section>

  <section class="halfpiece">
      <p><?php the_field('services_message'); ?></p>
      <a href="/rausch/services"><button><?php the_field('services_button'); ?></button></a>
  </section>

  <section class="halfpiece">
      <p><?php the_field('led_message'); ?></p>
      <a href="/rausch/led-technology"><button><?php the_field('led_button'); ?></button></a>
  </section>

</article>

<article class="testimonial" data-type="background" data-background="<?php echo(wp_get_attachment_url(get_post_meta($post->ID, 'background_image')[0])); ?>">
    <section class="centerpiece">
        <p class="blockquote"><?php the_field('testimonial'); ?></p>
        <p>-<?php the_field('testifier'); ?></p>
        <p><?php the_field('job_title'); ?></p>
    </section>
</article>
<?php
  endwhile;
?>

<!--<article class="work-clients">
    <section class="centerpiece">
        <h1 class="secondary-heading">Clients</h1>
        <p><?php //echo(get_post_meta($post->ID, 'about_clients')[0]); ?></p>
    </section>
    <ul>
    <?php
    // $client_list_args = array(
    //     'post_type' =>      'client',
    //     'numberposts'=>     -1,
    //     'posts_per_page'=>  -1,
    //     'post_status'=>     'publish',
    // );
    // $client_list = new WP_Query( $client_list_args );

    // if ( $client_list->have_posts() ) while ( $client_list->have_posts() ) : $client_list->the_post();
    ?>
        <li class="col-4-12">
          <img src="<?php // the_field('client_logo_image'); ?>"/>
        </li>
    <?php
    // endwhile;
    ?>
    </ul>
</article> -->

<?php get_footer(); ?>