<?php get_header();
/*
Template name: Blogg
*/ ?>

<main>
	<section>
		<div class="container">

			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
					<h1>Blogg</h1>
					<?php if (have_posts()) :
						while (have_posts()) : the_post(); ?>

 							<article>
							<img src="<?php the_post_thumbnail_url('largest')?>" class="img-fluid" />

								<h2 class="title">
                             
									<a href="<?php the_permalink(); ?> "><?php the_title(); ?></a>
								</h2>

										<ul class="meta">
										<li>
											<i class="fa fa-calendar"><?php the_time('F j, Y g:i a'); ?></i> 
										</li>
										<li>
										<i class="fa fa-user"></i><a href="<?php the_permalink();?>"><?php the_author_posts_link();?></a>
										</li>
										<li>
											
										<i class="fa fa-tag"></i><a href="<?php the_category();?></a>
										</li>
									</ul> 


                                    <p><?php the_content(); ?></p>

							</article>
						<?php endwhile; ?>
					<?php endif; ?>
					<nav class="navigation pagination">
						<h2 class="screen-reader-text">Inläggsnavigering</h2>
						<a class="prev page-numbers" href="">Föregående</a>
						<span class="page-numbers current">1</span>
						<a class="page-numbers" href="">2</a>
						<a class="next page-numbers" href="">Nästa</a>
					</nav>
				</div>
				<aside id="secondary" class="col-xs-12 col-md-3">
					<div id="sidebar">		
					<ul>
							<li>
								<form id="searchform" class="searchform">
									<div>
										<label class="screen-reader-text">Sök efter:</label>
										<input type="text" />
										<input type="submit" value="Sök" />
									</div>
								</form>
							</li>
						</ul>
					
						<ul role="navigation">
							<li class="pagenav">
								<h2>Sidor</h2>
								<div id="blogg-sidebar-1">
										<?php
										if (is_active_sidebar('blogg-sidebar-1')) {
											dynamic_sidebar('blogg-sidebar-1');
										}
										?>
									</div>
			
						</ul>
			
					</div>
				</aside>
			</div>

		</div>
	</section>
</main>

<?php get_footer(); ?>