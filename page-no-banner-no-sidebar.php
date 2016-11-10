<?php

/* Template Name: No Banner No Sidebar */
get_header(); ?>


<div class="container no-banner ">
	<div class="row">
	
			<div  class="col-sm-12 column-margin">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!----------- WordPress Loop----------->

<?php the_post_thumbnail(); ?><!----------- Include Featured Image ----------->

		<?php the_content(); ?>
			

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?><!----------- End of WordPress Loop ----------->

			</div> <!-- closing main column tag-->

		
		
	</div><!-- closing row tag-->
</div><!-- closing container tag-->

	
												
								
								



<?php


get_footer(); ?>
