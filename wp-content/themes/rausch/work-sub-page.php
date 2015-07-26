<?php
    /* Template Name: Work Sub Page */
    get_header();
    global $post;
    $headtext = $post->post_content;
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

    $case_args = array(
        'post_type' =>      'post',
        'numberposts'=>     -1,
        'posts_per_page'=>  -1,
        'post_status'=>     'publish',
        'category_name'=>   $post->post_name,
    );

    $case_studies = new WP_Query( $case_args );
?>
<article class="work-head" data-speed="15" data-type="background" data-background="<?php echo($image[0]); ?>">
    <section class="centerpiece">
        <h1><?php the_title(); ?></h1>
        <p><?php echo($headtext); ?></p>
    </section>
</article>
<article class="case-studies">
    <?php
        if ( $case_studies->have_posts() ) while ( $case_studies->have_posts() ) : $case_studies->the_post();
    ?>
    <section>
        <div class="case-info">
            <h2><?php the_title(); ?></h2>
            <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta. Shoulder ham meatball beef filet mignon sirloin. Ball tip pancetta boudin chicken. Sirloin beef jerky salami chuck capicola, drumstick flank sausage ball tip fatback filet mignon turkey pastrami brisket. Pastrami shoulder shank ground round biltong. Drumstick kevin bresaola cow tri-tip venison. Turducken meatball chuck kevin corned beef filet mignon chicken landjaeger ground round pancetta andouille ham hock cow.</p>
        </div>
        <div class="vid-contain">
            <i class="fa fa-volume-off fa-2x"></i>
            <video muted>
                <source src="<?php the_field('video') ?>" type="video/mp4">
            </video>
        </div>
    </section>
    <?php
        endwhile;
    ?>
</article>
<article class="testimonial" data-speed="15" data-type="background" data-background="<?php echo(wp_get_attachment_url(get_post_meta($post->ID, 'background_image')[0])); ?>">
    <section class="centerpiece">
        <h3 class="blockquote"><?php echo(get_post_meta($post->ID, 'testimonial')[0]); ?></h3>
        <p>-<?php echo(get_post_meta($post->ID, 'testifier')[0]); ?></p>
        <p><?php echo(get_post_meta($post->ID, 'job_title')[0]); ?></p>
    </section>
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