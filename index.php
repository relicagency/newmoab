<?php get_header(); ?>

	<div class="">

		<div class="">
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
			?>
				<hr />
			<?php
			endwhile; endif; 
			?>

		</div> <!-- /.blog-main -->
		<div class="">
			<?php get_sidebar(); ?>
		</div>
	</div> <!-- /.row -->

<?php get_footer(); ?>