<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<section class="main_banner swiper-container">
	<ul class="swiper-wrapper main_banner_slider">
		<li class="swiper-slide slide1 item" style="background: url('<?php bloginfo('template_url') ?>/src/img/slider/slide1.jpg') no-repeat center center; background-size: cover;">
			<div class="container">
				<div class="slider-content">
					<div class="bg-text parallax-text" data-swiper-parallax="-50%">
						<h1>Тренируйся</h1>
						<h2>ВСЕГДА И ВЕЗДЕ</h2>
					</div>
					<p class="parallax-text" data-swiper-parallax="-40%">Раскрой свой потенциал вместе с BANDSCLUBTM.</p><a class="btn btn-def parallax-text access-btn" href="/shop/" data-swiper-parallax="-30%">ВЫБРАТЬ СВОЙ НАБОР</a>
				</div><img class="img-responsive parallax-img" src="<?php bloginfo('template_url') ?>/src/img/slider/slide1-people.png" alt="" data-swiper-parallax="-20%">
			</div>
		</li>
		<li class="swiper-slide slide2 item" style="background: url('<?php bloginfo('template_url') ?>/src/img/slider/slide2.jpg') no-repeat center center; background-size: cover;">
			<div class="container">
				<div class="slider-content col-md-offset-4">
					<div class="bg-text parallax-text" data-swiper-parallax="50%">
						<h1>девочки</h1>
						<h2>любят яркие цвета</h2>
					</div>
					<p class="parallax-text-right" data-swiper-parallax="50%">тренируйся со стилем - эффектность и эффективность в одном наборе.</p><a class="btn btn-def parallax-text-right third-btn" href="/shop/power-lady/" data-swiper-parallax="50%">ПЕРЕЙТИ К ПОКУПКЕ</a>
				</div><img class="img-responsive parallax-img-left" src="<?php bloginfo('template_url') ?>/src/img/slider/slide2-girl.png" alt="" data-swiper-parallax="70%">
			</div>
		</li>
		<li class="swiper-slide slide3 item" style="background: url('<?php bloginfo('template_url') ?>/src/img/slider/slide3.jpg') no-repeat center center; background-size: cover;">
			<div class="container">
				<div class="slider-content">
					<div class="bg-text parallax-text-left" data-swiper-parallax="50%">
						<h1>жизнь в</h1>
						<h1>движении</h1>
					</div>
					<p class="parallax-text-left" data-swiper-parallax="50%">Никаких ограничений. <br> Никаких  оправданий. <br> Никаких барьеров.</p><a class="btn btn-def parallax-text-left access-btn" href="/shop/" data-swiper-parallax="50%">ВЫБРАТЬ СВОЙ НАБОР</a>
				</div><img class="img-responsive img-girls parallax-img-right" src="<?php bloginfo('template_url') ?>/src/img/slider/slide3-girls.png" alt="" data-swiper-parallax="80%"><img class="img-responsive img-girl parallax-img-right" src="<?php bloginfo('template_url') ?>/src/img/slider/slide3-girl.png" alt="" data-swiper-parallax="70%">
			</div>
		</li>
	</ul>
</section>

<section>
	<div class="container">
		<div class="row">
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>