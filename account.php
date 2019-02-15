<?php
/*
Template Name: Account
*/
?>

<?php get_header(); ?>

<section class="account-wrapper">
	<div class="container">
		<h1>Мой аккаунт</h1>
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>