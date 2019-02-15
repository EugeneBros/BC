<?php
/*
Template Name: Log in/Register
*/
?>

<?php get_header(); ?>

<section class="login-wrapper">
	<div class="container">
		<h1>Авторизация</h1>
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>