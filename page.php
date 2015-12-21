<?php get_header(); ?>

<div class="container">

<?php 
if(have_posts()):
	while(have_posts()):
		the_post();
?>

		<h1><?php the_title(); ?></h1>

		<p><?php the_content(); ?></p>
	
	
</article>
<?php
	endwhile;
endif;
?>


</div><!-- class="container" -->

<?php  get_footer();?>