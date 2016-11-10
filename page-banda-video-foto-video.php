<?php
/* Template Name: Bandas Video-Foto-Video */

get_header(); ?>
<header id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<?php
	$imagen1=get_field('imagen1');
	$pageslug=get_field('etiqueta1');
	$facebook=get_field('facebookurl');
	$gplus=get_field('gplusurl');
	$instagram=get_field('instagramurl');
	$twitter=get_field('twitterurl');
	$contacto=get_field('contacto');
	$youtube=get_field('youtubeurl');
	$bandcamp=get_field('bandcampurl');
	$soundcloud=get_field('soundcloudurl');
	?>
	<!-- Wrapper for Slides -->
	<div class="carousel-inner">
		<div class="item active">
			<iframe width="100%" height="100%" src="//www.youtube.com/embed/<?php echo the_field('video1'); ?>?controls=1&iv_load_policy=3" frameborder="0" allowfullscreen=""></iframe>
		</div>
		<div class="item">
			<!-- Set the first background image using inline CSS below. -->
			<div class="fill" style="background-image:url('<?php echo $imagen1['url']; ?>');"></div>
		<div class="carousel-caption">
			<h2><?php echo $imagen1['title']; ?></h2>
		</div>
	</div>
	<div class="item active">
			<iframe width="100%" height="100%" src="//www.youtube.com/embed/<?php echo the_field('video2'); ?>?controls=1&iv_load_policy=3" frameborder="0" allowfullscreen=""></iframe>
		</div>
	
	
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="icon-next"></span>
	</a>
	<div id="carouselButtons">
		<button id="pauseButton" type="button" class="btn btn-default btn-xs">
			<span id="icono-play" class="glyphicon glyphicon-pause"></span>
		</button>
	</div>
</header>


<div class="container">
	<div class="row">
			<div class="col-sm-6 text-center">
				<br>
				<h1 class="padding-margin"><?php the_title(); ?></h1>
			</div>
		</div>
	
	<div class="row">
	
			<div  class="col-md-6 column-margin">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!----------- WordPress Loop-----------><?php the_post_thumbnail('medium', array( 'class' => 'img-responsive margin img-circle' ) ); ?><!----------- Include Featured Image ----------->		
<ul class="list-inline text-center">
                    <?php if( !empty( $soundcloud)){ ?>
						
						<li>
                        <a href="<?php echo $soundcloud ?>">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-soundcloud fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
						</li>
			<?php } ?>
			<?php if( !empty( $bandcamp)){ ?>
						
						<li>
                        <a href="<?php echo $bandcamp ?>">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-tripadvisor fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
						</li>
			<?php } ?>
					<?php if( !empty( $twitter)){ ?>
						
						<li>
                        <a href="<?php echo $twitter ?>">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
						</li>
			<?php } ?>
                    <?php if( !empty( $facebook)){ ?>
						
						<li>
                        <a href="<?php echo $facebook ?>">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
						</li>
			<?php } ?>
                    <?php if( !empty( $youtube)){ ?>
						
						<li>
                        <a href="<?php echo $youtube ?>">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
						</li>
			<?php } ?>
                    <?php if( !empty( $gplus)){ ?>
						
						<li>
                        <a href="<?php echo $gplus ?>">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
						</li>
			<?php } ?>
		    <?php if( !empty( $instagram)){ ?>
						
						<li>
                        <a href="<?php echo $instagram ?>">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
						</li>
			<?php } ?>
					<?php if( !empty( $contacto)){ ?>
						
						<li>
                        <a href="mailto:<?php echo $contacto ?>">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
						</li>
			<?php } ?>
                </ul>
<?php the_content(); ?>			<?php endwhile; else : ?>	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php endif; ?><!----------- End of WordPress Loop ----------->

			</div> <!-- closing main column tag-->

			
				<aside class="col-md-4  col-md-offset-2 column-margin "> <?php dynamic_sidebar( 'right_sidebar' ); ?>
				<?php if( !empty( $pageslug)) : ?>
                       <h2 class="widgettitle">Reciente</h2>
					   <ul class="recientes-de">
							<?php
								$args = array( 'posts_per_page' => 5, 'offset'=> 0, 'tag' => $pageslug );
								
								$myposts = get_posts( $args );
								//var_dump($myposts);
								foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</li>
							<?php endforeach; 
							wp_reset_postdata();?>
						
						</ul>
					   <?php endif; ?>
				</aside><!-- closing sidebar column tag-->
	
	</div><!-- closing row tag-->
	
	<div class="row "><!-- Add Content  from Add Content to Page -->	
			<div class="col-md-10 col-md-offset-2 column-margin left-padding" >
				<?php $id = 143; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>
			</div>
	</div><!-- closing row tag for Added Content-->
													
</div><!-- closing container tag-->
	
	
								
								



<?php
wp_enqueue_script( 'carousel_custom', get_template_directory_uri() . '/js/carousel-custom.js', array(), '1.0.0', true ); 

get_footer(); ?>
