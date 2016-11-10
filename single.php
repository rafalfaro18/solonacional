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

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!----------- WordPress Loop----------->



<div class="entry-content">
	<div class="container">
		<div class="row">
			<div  class="col-md-6 ">

				<article >
					<div class="entry-meta  column-margin">
						<span class="posted-on"><?php the_date(); ?> 
						</span><!-- include date above post -->
							<h3 class="black"><?php the_title(); ?></h3>
							
							
							<div class="post-image">
							<?php the_post_thumbnail('medium'); ?><!----------- Include Featured Image ----------->
						<!----------- 	the_post_thumbnail(array(480, 360));   use this array sample for exact sizing ----------->
							</div><!-- close post-image tag -->
			
							
							
							
				
							
								<div class="entry-content ">
								<?php the_content(); ?>
									<div class="comment-margin">
									<?php	comments_template( '', true );  ?>
									</div><!-- end of comment -->
												
								</div><!-- end of post content -->

					</div>
				</article>	
			</div>
			
				<div class="col-md-4  col-md-offset-2 column-margin  "><?php dynamic_sidebar('right_sidebar'); ?>
				</div>
			
		</div> 
	</div>
</div><!-- end of post content -->


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?><!----------- End of WordPress Loop ----------->




	
												
								
								



<?php


get_footer(); ?>
