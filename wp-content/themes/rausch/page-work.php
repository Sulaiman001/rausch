<?php
  get_header();
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
 ?>
<article class="work bg-image-wrap" data-type="background" data-background="<?php echo($image[0]); ?>">

  <section class="centerpiece intro-header">
      <h1>Work</h1>
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
        <blockquote class="blockquote"><?php echo(get_post_meta($post->ID, 'testimonial')[0]); ?></blockquote>
        <p>-<?php echo(get_post_meta($post->ID, 'testifier')[0]); ?></p>
        <p><?php echo(get_post_meta($post->ID, 'job_title')[0]); ?></p>
    </section>
</article>

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
