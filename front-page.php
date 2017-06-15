<?php get_header(); ?>

	<div class="">
		<div class="">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!--<h2 class="" style="color:#2F90C0;"><?php the_title(); ?></h2>-->
	        <div>
	        	<?php the_content(); ?>
	        </div>
		<?php endwhile; endif; ?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>