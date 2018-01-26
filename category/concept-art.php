	<section class="gallery-div">
		<div class="container">
				<div class="row" id="main-content">
						<div class="col-lg-12" id="inside">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<?php if(has_post_thumbnail()) : ?>
								<div class="col-xs-4 gallery">
									<a href="<?php the_permalink(); ?>"><img class="gallery-img" src="<?php the_post_thumbnail(); ?></a>
								</div>
							<?php endif;?>
						<?php endwhile; else: ?>
						<?php endif; ?>
						</div>
				</div>
		</div>
	</section>




