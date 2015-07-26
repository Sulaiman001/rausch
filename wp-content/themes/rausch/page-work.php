<?php get_header();
global $post;
$footer_message = get_post_meta($post->ID, 'footer_message');
$button_message = get_post_meta($post->ID, 'button_message');
?>
<article class="work-head" data-speed="15" data-type="background" data-background="<?php echo(get_template_directory_uri().'/img/VidProduction6.jpg'); ?>">

  <section class="centerpiece">
      <h1>Our Work</h1>
      <p><?php echo($post->post_content); ?></p>
  </section>

</article>

<article class="featured-projects">

    <h1>Featured Projects</h1>
    <?php
      $work_cat_args = array(
          'post_type' =>      'page',
          'numberposts'=>     -1,
          'posts_per_page'=>  -1,
          'post_status'=>     'publish',
          'post_parent'=>     5,
      );
      $work_cats = new WP_Query( $work_cat_args );

      //print_r($work_cats->get_posts());
      if ( $work_cats->have_posts() ) while ( $work_cats->have_posts() ) : $work_cats->the_post();
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
        // $case_args = array(
        //     'post_type' =>      'post',
        //     'numberposts'=>     1,
        //     'posts_per_page'=>  1,
        //     'post_status'=>     'publish',
        //     'category_name'=>   $post->post_name,
        // );

        // $case_study = new WP_Query( $case_args );
        // if ( $case_study->have_posts() ) while ( $case_study->have_posts() ) : $case_study->the_post();
    ?>
      <section class="col-4-12">
        <figure class="featured" data-type="background" data-background="<?php echo($image[0]); ?>">
          <a href="<?php echo($post->guid); ?>">
            <h2 class="project-title"><?php the_title(); ?></h2>
          </a>
        </figure>
      </section>
    <?php
        // endwhile;
      endwhile;
      wp_reset_postdata();
    ?>

</article>
<article class="testimonial" data-speed="15" data-type="background" data-background="<?php echo(wp_get_attachment_url(get_post_meta($post->ID, 'background_image')[0])); ?>">
    <section class="centerpiece">
        <h3 class="blockquote"><?php echo(get_post_meta($post->ID, 'testimonial')[0]); ?></h3>
        <p>-<?php echo(get_post_meta($post->ID, 'testifier')[0]); ?></p>
        <p><?php echo(get_post_meta($post->ID, 'job_title')[0]); ?></p>
    </section>
</article>

<article class="work-clients">
    <section class="centerpiece">
        <h1 class="secondary-heading">Clients</h1>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta. Shoulder ham meatball beef filet mignon sirloin. Ball tip pancetta boudin chicken. Sirloin beef jerky salami chuck capicola, drumstick flank sausage ball tip fatback filet mignon turkey pastrami brisket. Pastrami shoulder shank ground round biltong. Drumstick kevin bresaola cow tri-tip venison. Turducken meatball chuck kevin corned beef filet mignon chicken landjaeger ground round pancetta andouille ham hock cow.</p>
    </section>
    <ul>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
    </ul>
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