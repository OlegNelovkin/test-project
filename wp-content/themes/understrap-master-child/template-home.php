<?php
/*
 * Template Name: Home Page
 */
acf_form_head(); get_header();

?>

<main class="homepage_section">

	<section class="property_section">
		<div class="container">
			<h2>Недвижимость</h2>
			<div class="row">
				<?php $arg = array(
					'post_type'	    => 'property',
					'order'		    => 'ASC',
					'orderby'	    => 'menu_order',
					'posts_per_page'    => -1
				);
				$the_query = new WP_Query( $arg );
				if ( $the_query->have_posts() ) : ?>

					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="col-lg-3">

							<a href="<?php the_permalink();?>">
								<div class="post_thumb" style="background-image: url('<?php the_field('property_ptoto'); ?>');"></div>
							</a>
							<p class="property_title"><?php the_title(); ?></p>

							<ul>
								<?php if($ploshhad = get_field('ploshhad')): ?>
									<li>Площадь: <?php echo $ploshhad; ?></li>
								<?php endif; ?>
								<?php if($stoimost = get_field('stoimost')): ?>
									<li>Стоимость:<?php echo $stoimost; ?></li>
								<?php endif; ?>
								<?php if($adres = get_field('adres')): ?>
									<li>Адрес: <?php echo $adres; ?></li>
								<?php endif; ?>
								<?php if($zhilaya_ploshhad = get_field('zhilaya_ploshhad')): ?>
									<li>Жилая площадь: <?php echo $zhilaya_ploshhad; ?></li>
								<?php endif; ?>
								<?php if($etazh = get_field('etazh')): ?>
									<li>Этаж: <?php echo $etazh; ?></li>
								<?php endif; ?>
							</ul>

						</div>
					<?php endwhile; ?>

				<?php endif; wp_reset_query(); ?>
			</div>
		</div>
	</section>

	<section class="property_section">
		<div class="container">
			<h2>Города</h2>
			<div class="row">
				<?php $arg = array(
					'post_type'	    => 'base_of_cities',
					'order'		    => 'ASC',
					'orderby'	    => 'menu_order',
					'posts_per_page'    => -1
				);
				$the_query = new WP_Query( $arg );
				if ( $the_query->have_posts() ) : ?>

					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="col-lg-3">
							<a href="<?php the_permalink();?>">
								<a href="<?php the_permalink();?>">
									<div class="post_thumb" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></div>
								</a>
							</a>
							<p class="property_title"><?php the_title(); ?></p>
						</div>
					<?php endwhile; ?>

				<?php endif; wp_reset_query(); ?>
			</div>

			<h2>Добавить недвижимость</h2>
			<div class="add_prorerty_form">
				<?php

				acf_form(array(
					'post_id'		=> 'new_post',
					'post_title'	=> true,
					'post_content'	=> true,
					'new_post'		=> array(
						'post_type'		=> 'property',
						'post_status'	=> 'publish'
					)
				));
				?>
			</div>

		</div>
	</section>
</main>

<?php get_footer(); ?>


