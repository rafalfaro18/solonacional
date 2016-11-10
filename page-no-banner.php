<?php

/* Template Name: No Banner with Sidebar */
get_header(); ?>


<div class="container no-banner ">
	<div class="row">
	
			<div  class="col-md-6 column-margin">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!----------- WordPress Loop----------->

<?php the_post_thumbnail(); ?><!----------- Include Featured Image ----------->

		<?php the_content(); ?>
			

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?><!----------- End of WordPress Loop ----------->

			</div> <!-- closing main column tag-->

			
				<aside class="col-md-4  col-md-offset-2 column-margin "><?php dynamic_sidebar('right_sidebar'); ?>
				</aside><!-- closing sidebar column tag-->

			
		
	</div><!-- closing row tag-->
</div><!-- closing container tag-->

	
												
								
								



<?php


get_footer(); ?>
