<?php
/*
Template Name: Partnership
*/
?>

<?php get_header(); ?>

<section class="partnership-wrapper">
	<div class="container">
		<h1 class="partnership-title">Партнерство</h1>
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>	
	</div>
</section>

<?php get_footer(); ?>