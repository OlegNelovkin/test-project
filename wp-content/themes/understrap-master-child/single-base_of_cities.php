<?php

get_header(); ?>

<main class="single_post">
	<div class="container">
		<h1 class="page_title"><?php the_title(); ?></h1>
		<div class="row">
			
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?><!-- BEGIN of Post -->

				<div class="col-lg-12" style="padding-bottom: 20px;">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php if ( has_post_thumbnail()) : ?>
							<div title="<?php the_title_attribute(); ?>" class="th">
								<?php the_post_thumbnail('large'); ?>
							</div>
						<?php endif; ?>
					</article>

				</div>
				<div class="col-lg-12">
					<h3>Недвижимость в городе</h3>
					<div class="row">
						<?php if( have_rows('nedvizhimost_v_gorode') ): ?>
							<?php while ( have_rows('nedvizhimost_v_gorode') ) : the_row(); ?>
								<div class="col-lg-3">
									<?php $post_object = get_sub_field('vyberite_nedvizhimost'); ?>
									<?php if( $post_object ): ?>
										<?php $post = $post_object; setup_postdata( $post ); ?>

										<a href="<?php the_permalink();?>">
											<div class="post_thumb " style="background-image: url('<?php the_field('property_ptoto'); ?>');"></div>
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

										<?php wp_reset_postdata(); ?>
									</div>

								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

	</div>
</div>
</div>

<?php get_footer(); ?>
