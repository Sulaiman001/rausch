<?php
    /* Template Name: LED Sub Page */
    get_header();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>
<article class="led bg-image-wrap" data-type="background" data-background="<?php echo($image[0]); ?>">
   
    <section class="centerpiece intro-header">
        <h1><?php echo($post->post_title); ?></h1>
        <p><?php echo($post->post_content); ?></p>
    </section>
</article>

<article class="trifecta">
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
<article class="list">
    <section class="centerpiece screen-items">
        <h1><?php echo(get_post_meta($post->ID, 'section_title')[0]); ?></h1>
        <?php
            $screen_option_args = array(
                'post_type' =>      'screen',
                'numberposts'=>     -1,
                'posts_per_page'=>  -1,
                'post_status'=>     'publish',
                'orderby'=>         'title',
                'order'=>           'ASC',
                'category_name'=>   $post->post_name
            );
            $screen_options = new WP_Query( $screen_option_args );
            if ( $screen_options->have_posts() ) while ( $screen_options->have_posts() ) : $screen_options->the_post();
        ?>
        <section class="col-4-12">
            <figure class="featured" data-type="background" data-background="<?php the_field('screenshot'); ?>"></figure>
            <h2 class="tech-title"><?php the_title(); ?></h2>
            <p class="tech-specs"><?php the_content(); ?></p>
        </section>
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </section>

    <a href="<?php bloginfo('template_directory');?>/img/RauschLEDSpecSheet.pdf" download><button>Download Tech Specs</button></a>
</article>
<article class="trifecta">
    <section class="centerpiece">
        <h1>Why Choose Rausch?</h1>
    </section>
    <section class="featured col-4-12">
        <h2>Experience</h2>
        <p>With over 15+ years of experience in event management,  live event production, video production, special events and LED technology, Rausch understands the business inside and out.</p>
    </section>
    <section class="featured col-4-12" >
        <h2>Knowledge</h2>
        <p>By staying on top of the newest technology and equipment, our talented crew maintains the experience and knowledge needed to run successful events and productions.</p>
    </section>
    <section class="featured col-4-12" >
        <h2>Commitment</h2>
        <p>Our first priority is helping you create the best live event experience from start to finish. Our commitment to see your event run successfully from start to finish is what makes Rausch Productions the best in the business.</p>
    </section>
</article>
<?php get_footer(); ?>
