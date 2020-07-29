<?php get_header(); ?>
  <?php while (have_posts()) : the_post(); 
    if ( !empty( get_the_content() ) ){ ?>
      
      <?php the_content(); ?>
      
    <?php	} ?>
  <?php  endwhile; ?>
 
<?php get_footer(); ?>