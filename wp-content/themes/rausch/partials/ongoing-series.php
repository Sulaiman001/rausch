<?php
  $args = array(
    'child_of'                 => 7,
    'orderby'                  => 'name',
    'order'                    => 'ASC',
    'hide_empty'               => 1,
    'hierarchical'             => 1,
    'taxonomy'                 => 'category',
    'pad_counts'               => false
  );
  $active_series = get_categories( $args );
?>

    <article class="ongoing-series">

     <h2 class="article-header">Current Series</h2>
      <?php
        foreach($active_series as $series){
          $catcolor = get_field("series_color", 'category_' . $series->term_id);
          $catheadimg = get_field("header_image", 'category_' . $series->term_id);
          $nextScreening = strtotime('+1 month');
          $filmargs = array(
            'post_type' =>      'film',
            'numberposts'=>     -1,
            'posts_per_page'=>  -1,
            'category__in' =>   array($series->term_id),
            'post_status'=>     'publish'
          );
          $films = new WP_Query( $filmargs );

          if ( $films->have_posts() ) while ( $films->have_posts() ) : $films->the_post();
            $agileid = get_post_meta(get_the_ID(), 'agileid')[0];

            $showargs = array(
              'post_type' =>      'showing',
              'orderby' =>        'meta_value',
              'meta_key' =>       'startdate',
              'order' => 'ASC',
              'meta_query'  => array(
                'relation' => 'AND',
                array(
                  'key'   => 'filmid',
                  'value'     => $agileid,
                  'compare'   => '=',
                ),
                array(
                  'key'   => 'startdate',
                  'value'     => date('n/j/Y h:ia'),
                  'compare'   => '>=',
                  'type' => 'NUMERIC,'
                ),
              ),
              'numberposts'=>     1,
              'posts_per_page'=>  1,
              'post_status'=>     'publish'
            );
            $shows = new WP_Query( $showargs );
            if ( $shows->have_posts() ) while ( $shows->have_posts() ) : $shows->the_post();
               // echo(get_the_title());
               if(strtotime(get_field('startdate')) < $nextScreening) {
                  $nextMovie = get_field('filmid');
                  $nextShowtime = get_field('buylink');
                  $nextScreening = strtotime(get_field('startdate'));
               }
            endwhile;
          endwhile;

          $filmargs = array(
            'post_type' =>      'film',
            'numberposts'=>     -1,
            'posts_per_page'=>  -1,
            'meta_query' =>     array(
              array(
                'key'   => 'agileid',
                'value'     => $nextMovie,
                'compare'   => '=',
                'type' => 'NUMERIC,'
              ),
            ),
            'post_status'=>     'publish'
          );
          $seriesfilm = new WP_Query( $filmargs );
          if ( $seriesfilm->have_posts() ) while ( $seriesfilm->have_posts() ) : $seriesfilm->the_post();
      ?>
        <section style="background:url('<?php the_field("event_image") ?>');" class="col-3-12 series-module">
          <div class="container">
            <header>
              <h3 style="background-color:<?php echo($catcolor); ?>; padding: 1.2rem 1.5rem;" class="series-title"><?php echo($series->name); ?></h3>
              <span>Next Screening:</span>
              <h4 class="film-title"><?php the_title(); ?></h4>
              <ul class="film-meta">
                <li><?php the_field('year_released'); ?></li>
                <li><?php $production_countries = explode(',', get_field('production_country')); echo $production_countries[0]; ?></li>
                <li><?php $directors = explode(',', get_field('director')); echo $directors[0]; ?></li>
              </ul>
            <?php
              endwhile;
            ?>
            </header>
            <div class="options">
              <a style="background-color:#004a87;" href="<?php echo($nextShowtime); ?>" role="ticket-link">Purchase Tickets</a>
              <a style="background-color:<?php echo($catcolor); ?>;" href="series/<?php echo($series->slug); ?>" role="archive-link">Series Archive</a>
            </div>
            <figure class="series-photo"><img src="<?php  ?>" alt="" /></figure>
          </div>
        </section>
    <?php } ?>

    </article><!-- /ongoing-series -->