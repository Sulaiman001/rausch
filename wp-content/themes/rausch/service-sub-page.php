<?php
    /* Template Name: Service Sub Page */
    get_header();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>
<article class="services bg-image-wrap" data-type="background" data-background="<?php echo($image[0]); ?>">
   
    <section class="centerpiece intro-header">
        <h1><?php the_title(); ?></h1>
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

<?php
    if(get_the_title() == 'Rentals') {
?>

<article class="list">
    <section class="centerpiece">
        <h1><?php the_title(); ?></h1>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta. </p>
    </section>
    <h3 class="col-4-12">Specialty 1</h3>
    <h3 class="col-4-12">Specialty 1</h3>
    <h3 class="col-4-12">Specialty 1</h3>
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
    <button>Get Started</button>
</article>

<?php
    }
?>

<article class="testimonial" data-type="background" data-background="<?php echo(wp_get_attachment_url(get_post_meta($post->ID, 'background_image')[0])); ?>">
    <section class="centerpiece">
        <h3 class="blockquote"><?php echo(get_post_meta($post->ID, 'testimonial')[0]); ?></h3>
        <p>-<?php echo(get_post_meta($post->ID, 'testifier')[0]); ?></p>
        <p><?php echo(get_post_meta($post->ID, 'job_title')[0]); ?></p>
    </section>
</article>

<article class="trifecta">
    <section class="centerpiece">
        <h1 class="secondary-heading">Why Choose Rausch?</h1>
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
