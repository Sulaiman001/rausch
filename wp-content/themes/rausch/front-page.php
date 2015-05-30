<?php
  get_header();
  //opcache_reset();
?>

<?php get_template_part( 'partials/now', 'playing' ); ?>

<?php get_template_part( 'partials/new', 'releases' ); ?>

<?php get_template_part( 'partials/ongoing', 'series' ); ?>

<?php get_footer(); ?>