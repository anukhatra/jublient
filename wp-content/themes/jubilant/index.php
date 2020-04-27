<?php get_header(); ?>

<?php $hero = get_field('hero'); ?>
<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="hero">
							<?php if (get_field('hero')) : ?>
								<img src="<?php echo $hero['image']; ?>" />
							<?php endif; ?>
						<div class="text">
							<h1><?php echo $hero['heading']; ?></h1>
							<p><?php echo $hero['titledescrption']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>