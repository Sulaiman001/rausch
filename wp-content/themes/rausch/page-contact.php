<?php
    get_header();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>
<article class="contact-head" data-type="background" data-background="<?php echo($image[0]); ?>">

  <section class="centerpiece">
      <h1>Contact Us</h1>
      <p><?php echo get_post_meta($post->ID, 'contact_desc')[0]; ?></p>
  </section>

</article>
<article>
    <section class="col-6-12 contact-col">
        <h1><?php echo get_post_meta($post->ID, 'column_heading')[0]; ?></h1>
        <p><?php echo get_post_meta($post->ID, 'column_paragraph')[0]; ?></p>
    </section>
    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <section class="col-6-12">
            <?php the_content(); ?>
          </section>

        <?php endwhile; ?>

    <?php endif; ?>

</article>
<?php get_footer(); ?>