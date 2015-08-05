<?php get_header(); ?>

<main>

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>
  <article class="team-mem-head" data-speed="15" data-type="background" data-background="<?php echo(wp_get_attachment_url(get_post_meta($post->ID, 'profile_picture')[0])); ?>">
      <section class="centerpiece">
          <h1><?php the_title(); ?></h1>
          <h2><?php echo get_post_meta($post->ID, 'position')[0]; ?></h2>
      </section>
  </article>

  <article>

    <section class="col-8-12 no-float">

      <?php the_content(); ?>

    </section>

  </article>

    <?php endwhile; ?>


    <?php else : ?>


  <?php endif; ?>

</main><!-- .interior -->

<?php get_footer(); ?>