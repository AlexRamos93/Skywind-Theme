<?php /*Template Name: Jobs*/ ?>

<?php get_header(); ?>

<!-- Header Section -->
	<header class="volunteer-top-div">
		<div class="container">
			<p class="volunteer-intro-title">Volunteer</p>
		</div>
	</header>

<!-- Team Section -->
	<section class="team-div">
		<div class="container">
			<h1>Join Our Team</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin finibus auctor leo, at porttitor quam. Fusce at lacus a ante scelerisque.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin finibus auctor leo, at porttitor quam. Fusce at lacus a ante scelerisque.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin finibus auctor leo, at porttitor quam. Fusce at lacus a ante scelerisque.</p>
		</div>
		<hr>
	</section>


<!-- Jobs Section -->
	<section class="job-div">
		<div class="container">
			<h1 class="div-title">Job Opening</h1>
			<div class="row">
				<?php query_posts('cat=3'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-lg-12">
					<?php if(has_post_thumbnail()) : ?>
						<div class="col-xs-4 jobs">
						<img class="jobs-img" src="<?php the_post_thumbnail(); ?>
						</div>
					<?php endif;?>
					<div class="col-xs-6 jobs">
						<p class="jobs-title"><?php the_title(); ?></p>
						<p class="jobs-content"><?php the_excerpt(); ?></p>
						<a class="btn btn-custom" href="<?php the_permalink(); ?>">Read Full Position</a>
					</div>
				</div>			
				<?php endwhile; else: ?>						
				<?php endif; ?>
			</div>
		</div>
		<hr>
	</section>

<!-- Form Section -->
	<section class="form-div">
		<div class="container"></div>
		<h1 class="div-title">Volunteer Form</h1>
		<button class="btn btn-custom">Click Here</button>
	</section>



<?php get_footer(); ?>