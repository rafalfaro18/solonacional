
<?php
/* Template Name: Full Width Template */

get_header(); ?>

       
<div class="banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</div><!----------- End of banner at top of page ----------->





<div class="container">
	<div class="row">
		<div  class="col-sm-12 column-margin">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!----------- WordPress Loop----------->

<?php the_post_thumbnail(); ?><!----------- Include Featured Image ----------->




				<?php the_content(); ?>
			

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?><!----------- End of WordPress Loop ----------->




			
				
			
		</div> <!--end of column -->
	</div><!-- end of row -->
</div><!-- end of container -->

	
												
								
								



<?php


get_footer(); ?>
