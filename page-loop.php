<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!----------- WordPress Loop----------->

<?php the_post_thumbnail(); ?><!----------- Include Featured Image ----------->

		<?php the_content(); ?>
			

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?><!----------- End of WordPress Loop ----------->
