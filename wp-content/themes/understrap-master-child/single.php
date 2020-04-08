<?php
/**
 * Single
 *
 * Loop container for single post content
 */
get_header(); ?>

<main class="single_post">
	<div class="container">
		<h1 class="page_title"><?php the_title(); ?></h1>
		<div class="row">
			
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?><!-- BEGIN of Post -->

				<div class="col-lg-6">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<a href="<?php the_permalink();?>">
							<div class="post_thumb big" style="background-image: url('<?php the_field('property_ptoto'); ?>');"></div>
						</a>
					</article>
				</div>
				<div class="col-lg-6">
					<h3>Характеристи</h3>
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
				<div class="col-lg-12" style="padding-top: 20px;">
					<?php the_content(); ?>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>

	</div>
</div>
</div>

<?php get_footer(); ?>
