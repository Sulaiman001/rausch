<?php
  get_header();
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
 ?>
<article class="work-head" data-type="background" data-background="<?php echo($image[0]); ?>">

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
          'orderby'=>         'title',
          'order'=>           'ASC',
      );
      $work_cats = new WP_Query( $work_cat_args );

      if ( $work_cats->have_posts() ) while ( $work_cats->have_posts() ) : $work_cats->the_post();
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    ?>
      <section class="col-4-12">
        <figure class="featured" data-type="background" data-background="<?php echo($image[0]); ?>">
          <a href="<?php the_permalink(); ?>">
            <h2 class="project-title"><?php the_title(); ?></h2>
          </a>
        </figure>
      </section>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>

</article>
<article class="testimonial" data-type="background" data-background="<?php echo(wp_get_attachment_url(get_post_meta($post->ID, 'background_image')[0])); ?>">
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
<?php get_footer(); ?>
