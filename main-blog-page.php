<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<section class="main-page-blog">
	<div class="container">
		<h1 class="main-page-blog_title"><?php echo the_title(); ?></h1>
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>