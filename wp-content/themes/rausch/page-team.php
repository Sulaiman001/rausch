<?php
    get_header();
    global $post;
    $team_args = array(
        'post_type' =>      'team',
        'numberposts'=>     -1,
        'posts_per_page'=>  -1,
        'post_status'=>     'publish',
    );

    $team_members = new WP_Query( $team_args );
?>
<article class="team-head" data-type="background" data-background="<?php echo(get_template_directory_uri().'/img/Random4.jpg'); ?>">

  <section class="centerpiece">
      <h1>Our Team</h1>
      <p><?php echo($post->post_content); ?></p>
  </section>

</article>

<article class="team-profiles">
    <?php
        if ( $team_members->have_posts() ) while ( $team_members->have_posts() ) : $team_members->the_post();
    ?>
    <section class="featured col-6-12">
        <div class="profile-img" data-type="background" data-background="<?php the_field('profile_picture') ?>"></div>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </section>
    <?php
        endwhile;
    ?>

</article>

<?php get_footer(); ?>