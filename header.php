<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-- This Meta is really important for viewing on mobile phones -->
	<meta name="viewport" content="initial-scale=1 width=device-width">

	<!-- Title of the page -->
	<title><?php wp_title(' | ', true, 'right'); ?></title>

	<!-- Another Metas -->
	<meta name="description" content="Solo Nacional">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/normalize.css'?>">	
	
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->
    
    <!-- Font-awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		 
	<!-- IE 8 Support -->
	<!--[if lt IE 9]>
        <script src=" <?php get_template_directory_uri() . '/js/html5shiv.js'?>"></script>
    <![endif]-->
	
    <?php wp_head(); ?> 	<!-- Adds Injection Point  for head Area REQUIRED-->

</head>

<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83877317-1', 'auto');
  ga('send', 'pageview');

</script>
	

<nav class="navbar  navbar-fixed-top navbar-default">
	<div class="container">
		<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				 <span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button><!-- Customizer Logo Upload -->
				<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
    <div class='logo'>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
    </div>
<?php else : ?>
    <div>
        <p class='logo'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></p>
       
    </div>
<?php endif; ?>

		</div>			<!--  End of Customizer Logo Upload -->
		<div class="collapse navbar-collapse" id="myNavbar"><!--  Nav Walker Class Menu (dropdown) -->
                    	 <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                
				'container_id'      => 'myNavbar',
                'menu_class'        => 'nav navbar-nav navbar-fixed navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
						?>


       	</div>



    </div>

</nav> 

<!--<header></header>-->
    