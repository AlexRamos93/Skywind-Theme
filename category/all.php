<!-- Gallery Section -->
<section class="gallery-div">
		<div class="container">
				<div class="row" id="main-content">
						<div class="col-lg-12" id="inside">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<div class="col-xs-4 gallery">
									<?php the_content(); ?>
								</div>
						<?php endwhile; else: ?>
						<?php endif; ?>
						</div>
				</div>
		</div>
	</section>

