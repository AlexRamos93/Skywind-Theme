<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Header Section -->
	<header class="volunteer-top-div">
		<div class="container">
			<p class="volunteer-intro-title"><?php the_title(); ?></p>
		</div>
	</header>


<!-- Jobs Section -->
	<section class="job-div">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
						<div class="col-xs-4 jobs">
						</div>
					<div class="col-xs-6 jobs">
						<p class="jobs-content"><?php the_content(); ?></p>
					</div>
				</div>			
				<?php endwhile; else: ?>						
				<?php endif; ?>
			</div>
		</div>
		<hr>
	</section>


<?php get_footer(); ?>