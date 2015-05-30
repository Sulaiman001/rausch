<?php
  date_default_timezone_set('America/Chicago');
  // Retrieve the upcoming shows that are later than right now, but earlier than today at midnight.
  $showargs = array(
    'post_type' =>      'showing',
    'orderby' =>        'meta_value',
    'meta_key' =>       'startdate',
    'order' => 'ASC',
    'numberposts'=>     -1,
    'posts_per_page'=>  -1,
    'meta_query'  => array(
      'relation' => 'AND',
      array(
        'key'   => 'startdate',
        'value'     => date('n/j/Y g:ia'),
        'compare'   => '>=',
        'type' => 'NUMERIC,'
      ),
      array(
        'key'   => 'startdate',
        'value'     => date('n/j/Y g:ia', strtotime('tomorrow 1:00am')),
        'compare'   => '<=',
        'type' => 'NUMERIC,'
      ),
    ),
    'post_status'=>     'publish'
  );

  $shows = new WP_Query( $showargs );
  // We use this array $todayshows to establish which films need to be pulled for the slider
  $todayshows = array();
  if ( $shows->have_posts() ) while ( $shows->have_posts() ) : $shows->the_post();
    array_push($todayshows, get_post_meta(get_the_ID(), 'filmid')[0]);
  endwhile;

  // Query films based on contents of $todayshows
  // TODO: determine best way to sort films in slider by earliest showtime
  $filmargs = array(
    'post_type' =>      'film',
    'numberposts'=>     -1,
    'posts_per_page'=>  -1,
    'meta_query'  => array(
      array(
        'key'   => 'agileid',
        'value'     => array_unique($todayshows),
        'compare'   => 'IN',
      )
    ),
    'post_status'=>     'publish'
  );
  $films = new WP_Query( $filmargs );
?>

    <article class="now-playing">

      <section class="col-12-12 playing-today">
        <h2 class="article-header stickem">Playing Today</h2>
        <div id="slider">
          <ol class="slides-container">
          <?php
            if ( $films->have_posts() ) while ( $films->have_posts() ) : $films->the_post();
            $agileid = get_post_meta(get_the_ID(), 'agileid')[0];
          ?>
            <li data-type="background" data-speed="20" data-background="<?php the_field('event_image'); ?>">
              <div class="gradient-overlay"></div>
              <header>
                <h1><a class="film-title" href="<?php the_field('infolink'); ?>"><?php the_title(); ?></a></h1>
                <ul class="film-meta">
                <?php
                  $prod_countries = explode(",", get_post_meta(get_the_ID(), 'production_country')[0]);
                  $directors = explode(",", get_post_meta(get_the_ID(), 'director')[0]);
                ?>
                  <li><?php the_field('year_released'); ?></li>
                  <li><?php echo($prod_countries[0]); if( count($prod_countries) > 1 ) { echo(" +"); } ?></li>
                  <li><?php
                        echo($directors[0]);
                        if( count($directors) > 1 ) {
                          echo(" <span class='show-extra'>+</span>");
                          foreach(array_slice($directors, 1) as $director) {
                      ?>
                        <p class="extra-direct"><?php echo($director); ?></p>
                      <?php
                          }
                        }
                      ?></li>
                </ul>
                <p><?php
                  $desc = get_the_content();
                  if(strlen($desc) > 250) {
                    echo(substr($desc, 0, 250).'...');
                  } else {
                    echo($desc);
                  }
                ?></p>
                <?php
                  // Necessary nested block to retrieve showtimes for today's films individually
                  if ( $shows->have_posts() ) while ( $shows->have_posts() ) : $shows->the_post();
                    if(get_post_meta(get_the_ID(), 'filmid')[0] == $agileid) {
                ?>
                      <a class="show-time" href="<?php the_field('buylink'); ?>"><?php echo(date('g:ia', strtotime(get_post_meta(get_the_ID(), 'startdate')[0]))); ?></a>
                <?php
                    }
                  endwhile;
                  wp_reset_postdata();
                ?>
              </header>
            </li>
          <?php endwhile; ?>
          </ol>
        </div>
      </section><!-- /playing-today -->

      <section class="col-5-12 showtimes">

        <h2 class="article-header stickem">Showtimes</h2>

        <a href="#" class="calendar-link">Full Calendar</a>

        <div class="container">

          <div class="col-4-12 showtime-module">
            <ol>
             <date><?php echo(date('j  F, l', strtotime('today'))); ?></date>
             <?php
               $showargs = array(
                  'post_type' =>      'showing',
                  'orderby' =>        'meta_value',
                  'meta_key' =>       'startdate',
                  'order' => 'ASC',
                  'numberposts'=>     -1,
                  'posts_per_page'=>  -1,
                  'meta_query'  => array(
                    'relation' => 'AND',
                    array(
                      'key'   => 'startdate',
                      'value'     => date('n/j/Y g:ia'),
                      'compare'   => '>=',
                      'type' => 'NUMERIC,'
                    ),
                    array(
                      'key'   => 'startdate',
                      'value'     => date('n/j/Y g:ia', strtotime('tomorrow 1:00am')),
                      'compare'   => '<=',
                      'type' => 'NUMERIC,'
                    ),
                  ),
                  'post_status'=>     'publish'
                );
               $shows = new WP_Query( $showargs );
               $tmrwshows = array();
                if ( $shows->have_posts() ) while ( $shows->have_posts() ) : $shows->the_post();
                  array_push($tmrwshows, get_post_meta(get_the_ID(), 'filmid')[0]);
                endwhile;

               $filmargs = array(
                  'post_type' =>      'film',
                  'numberposts'=>     -1,
                  'posts_per_page'=>  -1,
                  'meta_query'  => array(
                    array(
                      'key'   => 'agileid',
                      'value'     => array_unique($tmrwshows),
                      'compare'   => 'IN',
                    )
                  ),
                  'post_status'=>     'publish'
               );
               $films = new WP_Query( $filmargs );
              if ( $films->have_posts() ) while ( $films->have_posts() ) : $films->the_post();
                $agileid = get_post_meta(get_the_ID(), 'agileid')[0];
             ?>
             <li>
               <a href="<?php the_field('infolink'); ?>" class="film-title"><?php the_title(); ?></a>
               <?php
                // Necessary nested block to retrieve showtimes for tomorrow's films individually
                if ( $shows->have_posts() ) while ( $shows->have_posts() ) : $shows->the_post();
                  if(get_post_meta(get_the_ID(), 'filmid')[0] == $agileid) {
              ?>
                    <a class="show-time" href="<?php the_field('buylink'); ?>"><?php echo(date('g:ia', strtotime(get_post_meta(get_the_ID(), 'startdate')[0]))); ?></a>
              <?php
                  }
                endwhile;
                wp_reset_postdata();
              ?>
             </li>
            <?php endwhile; ?>
            </ol>
          </div>

          <div class="col-4-12 showtime-module">
            <ol>
             <date><?php echo(date('j  F, l', strtotime('+1 day'))); ?></date>
             <?php
               $showargs = array(
                  'post_type' =>      'showing',
                  'orderby' =>        'meta_value',
                  'meta_key' =>       'startdate',
                  'order' => 'ASC',
                  'numberposts'=>     -1,
                  'posts_per_page'=>  -1,
                  'meta_query'  => array(
                    'relation' => 'AND',
                    array(
                      'key'   => 'startdate',
                      'value'     => date('n/j/Y g:ia', strtotime('today midnight')),
                      'compare'   => '>=',
                      'type' => 'NUMERIC,'
                    ),
                    array(
                      'key'   => 'startdate',
                      'value'     => date('n/j/Y g:ia', strtotime('+1 day midnight')),
                      'compare'   => '<=',
                      'type' => 'NUMERIC,'
                    ),
                  ),
                  'post_status'=>     'publish'
               );
               $shows = new WP_Query( $showargs );
               $twodayshows = array();
                if ( $shows->have_posts() ) while ( $shows->have_posts() ) : $shows->the_post();
                  array_push($twodayshows, get_post_meta(get_the_ID(), 'filmid')[0]);
                endwhile;

               $filmargs = array(
                  'post_type' =>      'film',
                  'numberposts'=>     -1,
                  'posts_per_page'=>  -1,
                  'meta_query'  => array(
                    array(
                      'key'   => 'agileid',
                      'value'     => array_unique($twodayshows),
                      'compare'   => 'IN',
                    )
                  ),
                  'post_status'=>     'publish'
               );
               $films = new WP_Query( $filmargs );

              if ( $films->have_posts() ) while ( $films->have_posts() ) : $films->the_post();
                $agileid = get_post_meta(get_the_ID(), 'agileid')[0];
             ?>
             <li>
               <a href="<?php the_field('infolink'); ?>" class="film-title"><?php the_title(); ?></a>
               <?php
                // Necessary nested block to retrieve showtimes for tomorrow's films individually
                if ( $shows->have_posts() ) while ( $shows->have_posts() ) : $shows->the_post();
                  if(get_post_meta(get_the_ID(), 'filmid')[0] == $agileid) {
              ?>
                    <a class="show-time" href="<?php the_field('buylink'); ?>"><?php echo(date('g:ia', strtotime(get_post_meta(get_the_ID(), 'startdate')[0]))); ?></a>
              <?php
                  }
                endwhile;
                wp_reset_postdata();
              ?>
             </li>
            <?php endwhile; ?>
            </ol>
          </div>

          <div class="col-4-12 showtime-module">
            <ol>
             <date><?php echo(date('j  F, l', strtotime('+2 days'))); ?></date>
             <?php
               $showargs = array(
                  'post_type' =>      'showing',
                  'orderby' =>        'meta_value',
                  'meta_key' =>       'startdate',
                  'order' => 'ASC',
                  'numberposts'=>     -1,
                  'posts_per_page'=>  -1,
                  'meta_query'  => array(
                    'relation' => 'AND',
                    array(
                      'key'   => 'startdate',
                      'value'     => date('n/j/Y g:ia', strtotime('+1 day midnight')),
                      'compare'   => '>=',
                      'type' => 'NUMERIC,'
                    ),
                    array(
                      'key'   => 'startdate',
                      'value'     => date('n/j/Y g:ia', strtotime('+2 days midnight')),
                      'compare'   => '<=',
                      'type' => 'NUMERIC,'
                    ),
                  ),
                  'post_status'=>     'publish'
               );
               $shows = new WP_Query( $showargs );
               $threedayshows = array();
                if ( $shows->have_posts() ) while ( $shows->have_posts() ) : $shows->the_post();
                  array_push($threedayshows, get_post_meta(get_the_ID(), 'filmid')[0]);
                endwhile;

               $filmargs = array(
                  'post_type' =>      'film',
                  'numberposts'=>     -1,
                  'posts_per_page'=>  -1,
                  'meta_query'  => array(
                    array(
                      'key'   => 'agileid',
                      'value'     => array_unique($threedayshows),
                      'compare'   => 'IN',
                    )
                  ),
                  'post_status'=>     'publish'
               );
               $films = new WP_Query( $filmargs );

              if ( $films->have_posts() ) while ( $films->have_posts() ) : $films->the_post();
                $agileid = get_post_meta(get_the_ID(), 'agileid')[0];
             ?>
             <li>
               <a href="<?php the_field('infolink'); ?>" class="film-title"><?php the_title(); ?></a>
               <?php
                // Necessary nested block to retrieve showtimes for tomorrow's films individually
                if ( $shows->have_posts() ) while ( $shows->have_posts() ) : $shows->the_post();
                  if(get_post_meta(get_the_ID(), 'filmid')[0] == $agileid) {
              ?>
                    <a class="show-time" href="<?php the_field('buylink'); ?>"><?php echo(date('g:ia', strtotime(get_post_meta(get_the_ID(), 'startdate')[0]))); ?></a>
              <?php
                  }
                endwhile;
                wp_reset_postdata();
              ?>
             </li>
            <?php endwhile; ?>
            </ol>
          </div>

        </div>

      </section><!-- /showtimes -->

    </article><!-- /now-playing -->