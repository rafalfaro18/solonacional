<?php
get_header(); ?>

       
<div class="banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				 <h1>Blog</h1>
			</div>
		</div>
	</div>
</div><!----------- End of Blog banner ----------->





<div class="container">
	<div class="row">
	
	
		<div  class="col-md-6 column-margin">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!----------- WordPress Loop  ---------->



				
				<article >
					<div class="entry-meta  padding">
						<span class="posted-on"><?php the_date(); ?> 
						</span><!-- include date above post -->
							<h3 class="black"><?php the_title(); ?></h3>
							
							<div class="post-image">
							<?php the_post_thumbnail('thumbnail'); ?><!----------- Include Featured Image ----------->

							</div><!-- close post-image tag -->
							
								
								<div class="entry-content content-margin ">
								
								<?php the_excerpt(); ?>
													
								</div><!-- end of post -->
					</div>
				</article>	
			

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?><!----------- End of WordPress Loop ----------->







		</div><!-- Closing main column tag -->

			
				<aside class="col-md-4  col-md-offset-2 column-margin  "><?php dynamic_sidebar('right_sidebar'); ?>
				</aside>
			
		 
	</div><!-- Closing row tag -->
</div><!-- Closing container tag -->

	
												
								
								



<?php


get_footer(); ?>
