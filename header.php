<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>BANDSCLUB | <?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="header_substrate"></div>
	<header class="header" id="header">
		<div class="container" style="position:relative;">
			<div class="row">
				<div class="header_wrap">
					<div class="header_nav_wrap">
						<nav class="header_nav">
							<div class="header_logo">
								<a href="<?php echo get_home_url(); ?>">
									<img src="<?php bloginfo('template_url') ?>/src/img/logo.svg" alt="BRANDSCLUB">
								</a>
							</div>
							<?php header_nav(); ?>
						</nav>
					</div>
					<ul class="header_nav_aside">
						<li class="desctop-phone">
							<a href="tel:<?php echo get_theme_mod('ua_phone') ?>">
								<span><?php echo get_theme_mod('ua_phone') ?></span>
							</a>
						</li>
						<li class="mobile-phone icon">
							<a href="tel:<?php echo get_theme_mod('ua_phone') ?>">
								<img src="<?php bloginfo('template_url') ?>/src/img/icons/phone.png" alt="Phone us">
							</a>
						</li>
						<li class="icon">
							<a class="header-log-btn" href="#">
								<img src="<?php bloginfo('template_url') ?>/src/img/icons/user.svg" alt="Log in">
							<!--	<?php function author_lt() { ?> <? if ( !is_user_logged_in() ): ?> Авторизация <? else: ?> Ваш профиль <? endif?> <?php }   ?> <?php author_lt(); ?>-->
							</a>
							<ul class="header-log-list">
								<li class="header-log-item">
									<a href="<?php if ( is_user_logged_in() ) {echo '/my-account/';} else {echo '/login/';}?>">Аккаунт</a>
								</li>
								<li class="header-log-item">
									<a href="<?php 
									$db = new WPAM_Data_DataAccess();
									if ( is_user_logged_in() ) {
										$currentUser = wp_get_current_user();
										if ($db->getAffiliateRepository()->isUserAffiliate($currentUser->ID)) {
											$affiliate = $db->getAffiliateRepository()->loadByUserId($currentUser->ID);
											if ($affiliate->isApproved() || $affiliate->isActive()) {
												echo '/affiliate-home/';
											}
										}
									} else {
										echo '/affiliate-home/affiliate-login/';
									} 
									?>">Партнерство</a>
								</li>
							</ul>
						</li>
						<li class="icon">
							<a href="/cart/">
								<img src="<?php bloginfo('template_url') ?>/src/img/icons/cart.svg" alt="Cart">
							</a>
						</li>
					</ul>
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
			</div>
		</div>
	</header>

	<?php dynamic_sidebar('smartslider_area_1'); ?>