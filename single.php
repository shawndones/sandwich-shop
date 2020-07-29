<?php get_header(); ?>
<div class="c-page-header c-page-header--blog">
		<div class="c-page-header__inner l-frame">
			<h2 class='c-page-header__title'>Blog</h2>
			<?php
	  		$categories = wp_list_categories('title_li=&show_count=1&echo=0');
	  		$categories = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="count">[\\1]</span></a>', $categories); ?>
	  <a  href="#" class="c-page-header__title c-categories-toggle">Categories<i class="icon-chevron"><?php include(THEME_DIR . "/icons/chevron.svg"); ?></i></a>
	  <nav class="c-nav-categories">
	  	<ul class="c-list--categories">
	  		<?php echo $categories; ?>
	  	</ul>
	  </nav>
		</div>
	</div>


	<div class="l l--two-col">

		<div class="l-main">

			<!-- <div class="c-breadcrumbs">
				<div class="c-breadcrumbs__inner l">
				<?php // echo do_shortcode('[wpseo_breadcrumb]'); ?>
				</div>
			</div> -->

			<?php while (have_posts()) : the_post(); 
						if ( !empty( get_the_content() ) ){ ?>
				<section class="c-section c-section--wp-content">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</section>
						<?php	} ?>
			<?php  endwhile; ?>

		</div>
		
		<aside class="l-sidebar">
			<section class="c-section c-cta-form">
			<!-- <h2 class="c-section__title">Get Your Case Reviewed for Free</h2>
				<p class="c-section__intro">Fill out the form below, and a legal professional from our team will determine if you have a case.</p> -->
				<?php echo do_shortcode('[cta_form]'); ?>
			</section>
		</aside>

	</div>

<?php get_footer(); ?>