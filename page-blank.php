<?php

/* Template Name: Blank Template */
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-- This Meta is really important for viewing on mobile phones -->
	<meta name="viewport" content="initial-scale=1 width=device-width">

	<!-- Title of the page -->
	<title><?php wp_title(' | ', true, 'right'); ?></title>

	<!-- Another Metas -->
	<meta name="description" content="Easy Themes">

	
	
	
	 <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
	 <!-- Google Fonts -->
	 <!-- <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'> -->
	 <!-- Font-awesome -->
         <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
   
	
	
	
	 
	<!-- IE 8 Support -->
	<!--[if lt IE 9]>
        <script src=" <?php get_template_directory_uri() . '/js/html5shiv.js'?>"></script>
    <![endif]-->
	
    <?php wp_head(); ?> 	<!-- Adds Injection Point  for head Area REQUIRED-->





</head>

<body>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!----------- WordPress Loop----------->

<?php the_post_thumbnail(); ?><!----------- Include Featured Image ----------->

		<?php the_content(); ?>
			

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?><!----------- End of WordPress Loop ----------->

			</div> <!-- closing main column tag-->

		
		
	</div><!-- closing row tag-->
</div><!-- closing container tag-->

	
												
								
								


</body>
</html>

