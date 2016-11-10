



<?php
/* Template Name: Slide-show Template */

get_header(); ?>


<!----------- Start of  Meteor Slideshow at top of page ----------->
 <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
<!----------- End of Slideshow at top of page ----------->

<?php dynamic_sidebar( 'top_of_page' ); ?>

<div class="container">
	<div class="row">
		<div  class="col-sm-12 column-margin">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- WordPress Loop------->

				<?php the_post_thumbnail(); ?><!----------- Include Featured Image ---------->

				<?php the_content(); ?>
			

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?><!----------- End of WordPress Loop ----------->

		
		</div> <!--end of column -->
	</div><!-- end of row -->
</div><!-- end of container -->

	
												
								
								



<?php


get_footer(); ?>
