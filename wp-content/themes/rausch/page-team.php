<?php
    /* Template Name: Team Page */
    get_header();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $team_args = array(
        'post_type' =>      'team',
        'numberposts'=>     -1,
        'posts_per_page'=>  -1,
        'post_status'=>     'publish',
        // 'meta_key'          => 'grid_order',
        // 'orderby'           => 'meta_value_num',
        'order'             => 'ASC'
    );

    $team_members = new WP_Query( $team_args );
?>
<article class="team-head" data-type="background" data-background="<?php echo($image[0]); ?>">

  <section class="centerpiece">
      <h1>Team</h1>
      <p><?php echo($post->post_content); ?></p>
  </section>

</article>

<article class="team-profiles">
    <?php
        if ( $team_members->have_posts() ) while ( $team_members->have_posts() ) : $team_members->the_post();
    ?>
    <section class="featured col-4-12">
        <figure data-alt="<?php the_field('picture_alt') ?>" data-type="background" data-background="<?php the_field('profile_picture') ?>">
          <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
          </a>
        </figure>
    </section>
    <?php
        endwhile;
    ?>

</article>

<?php get_footer(); ?>