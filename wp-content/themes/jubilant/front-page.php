<?php get_header(); ?>
<?php $hero = get_field('hero'); ?>


<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php if (have_rows('slides')) : ?>
					<div class="hero">
						<div class="flexslider">
							<ul class="slides">
								<?php while (have_rows('slides')) : the_row();

									$image = get_sub_field('image');
									$imageurl = $image['sizes']['slider'];
									$title = get_sub_field('title');

								?>

									<li><img src="<?php echo $imageurl; ?>" alt="<?php echo $title ?>" /></li>
								<?php endwhile; ?>
							</ul>
						</div>
						
						<div class="text">
							<h1><?php echo $hero['heading']; ?></h1>
							<p><?php echo $hero['titledescrption']; ?></p>
						</div>
					</div>
					<?php endif; ?>


					
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>