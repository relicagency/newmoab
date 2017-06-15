<?php get_header(); ?>

	<div class="">

		<div class="">
			<h1 class="">Moab County News</h1>
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	
				<div class="">
					<div class="">
						<h2 class=""><?php the_title(); ?></h2>
						<h6>by <?php the_author(); ?>, <?php echo get_the_date(); ?></h6>
						<p class=""><?php the_content(); ?></p>
					</div>
				
				</div><!-- /.blog-post -->
			
				<hr />
			<?php
			endwhile; endif; 
			?>

		</div> <!-- /.blog-main -->

	</div> <!-- /.row -->

<?php get_footer(); ?>