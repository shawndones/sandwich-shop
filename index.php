<?php get_header(); ?>



<?php if (have_posts()) : ?>
  <section class="l-frame c-post-list">

  
    <?php
    
    while (have_posts()) : the_post(); 

        $post_thumb = get_the_post_thumbnail_url($the_pages->ID, 'thumbnail');
        $title = get_the_title();
        $url = get_the_permalink($the_pages->ID);
        $excerpt = get_the_excerpt($the_pages->ID);
        $trim = array(" [", "]");
        $excerpt_trimmed = str_replace($trim, '', $excerpt); 
         ?>
    
  <div class='c-post-item'>
    <div class="c-post-item__media">
      <img src="<?php echo $post_thumb; ?>" alt="Featured image for <?php echo $title;	?>">
    </div>
    <div class="c-post-item__body">
      <p class='c-post-item__date'><?php the_date('F j, Y'); ?></p>
      <h2 class="c-post-itema__headline"><a href="<?php echo $url; ?>"><?php the_title(); ?></a></h2>
      <p class="c-post-item__excerpt"><?php echo $excerpt_trimmed; ?></p>
    </div>
    </div>


  <?php endwhile;?>
  </section>
      <?php endif;?>


<?php get_footer(); ?>