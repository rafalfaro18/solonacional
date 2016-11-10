



<?php
/* Template Name: Bandas Paginaci&aacute;n */

get_header(); ?>

<header id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
			<div class="item active">
				<iframe width="100%" height="100%" src="//www.youtube.com/embed/fcDRdRGko2w?controls=1" frameborder="0" allowfullscreen=""></iframe>
			</div>
            <div class="item">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/wp-content/themes/solonacional/images/IMG_0729_opt.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Camelolloide en el Hoxton</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/wp-content/uploads/2016/09/descarga.jpg');"></div>
                <div class="carousel-caption">
                    <h2>iO en Bonuskafest</h2>
                </div>
            </div>
			<div class="item">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/wp-content/uploads/2016/09/vlcsnap-2016-07-29-20h00m15s668.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Extrasensorial en el Hoxton</h2>
                </div>
            </div>
			<div class="item">
				<iframe width="100%" height="100%" src="//www.youtube.com/embed/kXCPLYeDXSI?controls=1" frameborder="0" allowfullscreen=""></iframe>
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

    <div class="container-fluid bg3 text-center">
        <h3 class="padding-margin">Bandas</h3><br>
			
			
			
            <div class="row centrado"> 
            <?php
			  // set up or arguments for our custom query
			  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			  $query_args = array(
				'post_type' => 'page',
				'post_parent' => 138,
				'posts_per_page' => 6,
				'paged' => $paged,
				'orderby' => 'name',
				'order' => 'ASC'
			  );
			  // create a new instance of WP_Query
			  $the_query = new WP_Query( $query_args );
			?>

			<?php if ( $the_query->have_posts() ) : $post_idx = 0; while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
			  <?php $post_idx++; ?>
			<?php if($post_idx%3!=0){ ?>
			
			<div class="col-sm-6 col-md-4">
			<?php } else { ?>
			<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">
			<?php } ?>	
                <a class="link-imagen-circular" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive margin img-circle' ) ); ?></a>

<p class="padding-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </div>
			<?php endwhile; ?>
			</div>
			<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
			  <nav class="prev-next-posts">
				<div class="prev-posts-link">
				  <?php echo get_next_posts_link( 'P&aacute;gina Siguiente', $the_query->max_num_pages ); // display older posts link ?>
				</div>
				<div class="next-posts-link">
				  <?php echo get_previous_posts_link( 'P&aacute;gina Anterior' ); // display newer posts link ?>
				</div>
			  </nav>
			<?php } ?>

			<?php else: ?>
			  <article>
				<h1>Sorry...</h1>
				<p><?php _e('Sorry, no hay entradas que cumplan este criterio.'); ?></p>
			  </article>
			<?php endif; ?>
			
		</div>
        
    </div><?php wp_enqueue_script( 'carousel_custom', get_template_directory_uri() . '/js/carousel-custom.js', array(), '1.0.0', true ); ?>


<?php


get_footer(); ?>
