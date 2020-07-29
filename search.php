<?php get_header(); ?>
<div class="c-page-header">
	<div class="c-page-header__inner l-frame">
		<h2 class='c-page-header__title'>Search Results</h2>
	</div>
</div>

		<div class="l-frame">
			<h1><?php printf( __( 'Results for: %s', 'cja' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

		<?php if (have_posts() ) { ?>
		<section class="c-search-results">
			<ul class="c-search-results__list l-frame">
			<?php while (have_posts()) : the_post(); ?>
				<li class="c-search-result__item">
						<?php 
							if (!empty( substr(get_post_meta($post->ID, '_yoast_wpseo_title', true), 0))) { 
								?>
								<h3 class="c-search-result__title">
									<a href="<?php the_permalink() ?>"><?php echo substr(get_post_meta($post->ID, '_yoast_wpseo_title', true), 0); ?></a>
							</h3>
							
						<?php } else { ?>
							<h3 class="c-search-result__title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>		
						</h3>
						<?php } ?>	
						
							
	
									<?php if (!empty( get_the_post_thumbnail( $page->ID, 'thumbnail' ))) { ?>
									<!-- <td class="table-cell-thumbnail"> -->
										<a class="search-thumbnail" href="<?php the_permalink() ?>">
											<?php echo the_post_thumbnail( $page->ID, 'thumbnail'); ?>
										</a>
								
													
								<?php } ?>
											<!-- <p class="c-search-result__description"><?php 
												// if (!empty( get_post_meta($post->ID, '_yoast_wpseo_metadesc', true))) {
												// 	echo substr(get_post_meta($post->ID, '_yoast_wpseo_metadesc', true), 0);
												// } elseif (empty( get_post_meta($post->ID, '_yoast_wpseo_metadesc', true))) { 
												// 	echo cja_first_paragraph();
												// } 
											?>	</p>	 -->

						</li>
				
				<?php endwhile; ?>
			</ul>
		</section>
			
		<?php  } ?>

		<section class="c-pagination l-frame">
			<?php include("pagination.php"); ?>
		</section>
		</div>
<?php get_footer(); ?>