    <article class="new-releases">

      <h2 class="article-header">New Releases // Special Events</h2>
      <?php
        $eventargs = array(
            'post_type' =>      array('post', 'film'),
            'posts_per_page' => 8,
            'category__in' =>   array(36,35),
            'post_status'=>     'publish'
         );
         $events = new WP_Query( $eventargs );

        if ( $events->have_posts() ) while ( $events->have_posts() ) : $events->the_post();
        $cat = get_the_category($post->ID);
      ?>
      <section class="col-3-12">
      <?php
        if ( $cat[0]->term_id == '3' ) {
      ?>
        <header class="film-photo" data-type="background" data-background="<?php the_field('event_image'); ?>">
      <?php
        } else if ( has_post_thumbnail() ) {
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
      ?>
        <header class="film-photo" data-type="background" data-background="<?php echo($large_image_url[0]); ?>">
      <?php
        } else {
      ?>
        <header class="film-photo" data-type="background" data-background="<?php the_field('event_image'); ?>">
      <?php
        }
      ?>
        <div class="container">
          <a href="<?php the_field('infolink'); ?>" class="film-title"><?php the_title(); ?></a>
          <?php
          if ( $cat[0]->term_id == '3' ) {
            $prod_countries = explode(",", get_post_meta(get_the_ID(), 'production_country')[0]);
            $directors = explode(",", get_post_meta(get_the_ID(), 'director')[0]);

          ?>
            <ul class="film-meta">
              <li><?php the_field('year_released'); ?></li>
              <li><?php echo($prod_countries[0]); if( count($prod_countries) > 1 ) { echo(" +"); } ?></li>
              <li><?php echo($directors[0]); if( count($directors) > 1 ) { echo(" +"); }  ?></li>
            </ul>
          <?php
          }
          ?>
          </div>
        </header>

        <p><?php
          $desc = get_the_content();
          if(strlen($desc) > 250) {
            echo(substr($desc, 0, 250).'...');
          } else {
            echo($desc);
          }
        ?></p>

      </section>

      <?php endwhile; ?>

    </article><!-- /new-releases -->