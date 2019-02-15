<?php
/*
Template Name: Blog Post Single
*/
?>

<?php get_header(); ?>

<section class="blog-post-wrap">
	<div class="container">
		<div class="blog-post-img" style="background-image: url('<?php the_post_thumbnail_url( 'full', 'src' ); ?>');"></div>
		<h1 class="blog-post-title"><?php the_title(); ?></h1>
		<p class="blog-post-date"><?php the_date('Y-m-d'); ?></p>
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>

		<h2 class="recent-posts-title">Последние записи:</h2>

		<ul class="recent-posts-list">
			<?php $the_query = new WP_Query( 'showposts=3' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<li class="recent-posts-item">
					<a href="<?php the_permalink() ?>"><div class="recent-posts-img-wrap" style="background-image: url('<?php the_post_thumbnail_url( 'full', 'src' ); ?>');"></div></a>
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</li>
			<?php endwhile;?>
		</ul>




	</div>
</section>

<?php get_footer(); ?>