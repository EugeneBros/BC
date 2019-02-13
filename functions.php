<?php

//Add styles and scripts
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function theme_scripts() {

//  Adding styles
  wp_enqueue_style( 'libs-styles', get_template_directory_uri() . '/src/css/libs.min.css' );
//   wp_enqueue_style( 'roboto-font', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Roboto' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'style-css', get_template_directory_uri() . '/src/css/main.min.css' );

//  Adding scripts
  wp_enqueue_script( 'libs-scripts', get_template_directory_uri() . '/src/js/libs.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/src/js/main.min.js', array(), '1.0.0', true );

}

// Enable svg
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_theme_support('widgets');
add_theme_support('menus');
add_theme_support('post-thumbnails');

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header_nav' => 'Header navigation',
		'bandsclub_tm' => 'Bandsclub TM',
		'support_footer' => 'Support footer',
		'partnership_footer' => 'Partnership footer'
	));
});

function header_nav() {
	wp_nav_menu(array(
		'menu'              => 'header_nav',
		'theme_location'    => 'header_nav',
		'depth'             => 0,
		'container'         => '',
		'container_id'      => '',
		'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
		'menu_class'        => 'header_nav_list',
		'menu_id'           => 'header_nav_list ',
		'show_in_nav_menus' => true,
		//         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		//         'walker'            => new wp_bootstrap_navwalker()
	));
}

function bandsclub_tm_footer() {
	wp_nav_menu(array(
		'menu'              => 'bandsclub_tm',
		'theme_location'    => 'bandsclub_tm',
		'depth'             => 0,
		'container'         => '',
		'container_id'      => '',
		'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
		'menu_class'        => 'footer_nav',
		'menu_id'           => 'footer_nav',
		'show_in_nav_menus' => true,
		//         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		//         'walker'            => new wp_bootstrap_navwalker()
	));
}

function support_footer() {
	wp_nav_menu(array(
		'menu'              => 'support_footer',
		'theme_location'    => 'support_footer',
		'depth'             => 0,
		'container'         => '',
		'container_id'      => '',
		'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
		'menu_class'        => 'footer_nav',
		'menu_id'           => '',
		'show_in_nav_menus' => true,
		//         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		//         'walker'            => new wp_bootstrap_navwalker()
	));
}

function partnership_footer() {
	wp_nav_menu(array(
		'menu'              => 'partnership_footer',
		'theme_location'    => 'partnership_footer',
		'depth'             => 0,
		'container'         => '',
		'container_id'      => '',
		'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
		'menu_class'        => 'footer_nav',
		'menu_id'           => 'footer_nav',
		'show_in_nav_menus' => true,
		//         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		//         'walker'            => new wp_bootstrap_navwalker()
	));
}

//Custom fields
//Header custom fields
add_action('customize_register', function($customizer){
	$customizer->add_section(
		'header',
		array(
			'title' => 'Тайтлы навигации в хедере',
			'description' => 'Тайтлы',
			'priority' => 35,
		)
	);
//    Header Ukrainian phone
	$customizer->add_setting(
		'ua_phone',
		array('default' => '')
	);
	$customizer->add_control(
		'ua_phone',
		array(
			'label' => 'Ukrainian phone',
			'section' => 'header',
			'type' => 'text',
		)
	);
});

//Footer custom fields
add_action('customize_register', function($customizer){
	$customizer->add_section(
		'footer',
		array(
			'title' => 'Тайтлы навигации в футере',
			'description' => 'Тайтлы',
			'priority' => 35,
		)
	);
//    Footer titles navigation
	$customizer->add_setting(
		'bandsclub_tm_title',
		array('default' => '')
	);
	$customizer->add_control(
		'bandsclub_tm_title',
		array(
			'label' => 'Bandsclub TM',
			'section' => 'footer',
			'type' => 'text',
		)
	);

	$customizer->add_setting(
		'support_title',
		array('default' => '')
	);
	$customizer->add_control(
		'support_title',
		array(
			'label' => 'Support',
			'section' => 'footer',
			'type' => 'text',
		)
	);

	$customizer->add_setting(
		'partnership_title',
		array('default' => '')
	);
	$customizer->add_control(
		'partnership_title',
		array(
			'label' => 'Partnership',
			'section' => 'footer',
			'type' => 'text',
		)
	);

	$customizer->add_setting(
		'subscription_text',
		array('default' => '')
	);
	$customizer->add_control(
		'subscription_text',
		array(
			'label' => 'Subscription text footer',
			'section' => 'footer',
			'type' => 'text',
		)
	);
});

//Adding new post types
//Add new posts type training
add_action( 'init', 'true_register_post_type_init' );

function true_register_post_type_init() {
	$labels = array(
		'name' => 'Тренировки',
		'singular_name' => 'Тренировка',
		'add_new' => 'Добавить тренировку',
		'add_new_item' => 'Добавить новую тренировку', // заголовок тега <title>
		'edit_item' => 'Редактировать тренировку',
		'new_item' => 'Новая тренировка',
		'all_items' => 'Все тренировки',
		'view_item' => 'Просмотр тренировок на сайте',
		'search_items' => 'Искать тренировку',
		'not_found' =>  'Тренировок не найдено.',
		'not_found_in_trash' => 'В корзине нет тренировок.',
		'menu_name' => 'Тренировки'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'has_archive' => true,
		// 'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png',
		'menu_position' => 20,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
	);
	register_post_type('functions', $args);
}

/* Add to cart */
add_filter( 'woocommerce_product_single_add_to_cart_text', 'tb_woo_custom_cart_button_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'tb_woo_custom_cart_button_text' );
function tb_woo_custom_cart_button_text() {
	return __( 'Купить', 'woocommerce' );
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );

add_action( 'woocommerce_after_single_product_summary', "ACF_product_content", 10 );

function ACF_product_content(){
  echo '<h2> ACF Content </h2>';
  if (function_exists('the_field')){
    echo '<p>Woohoo, the_field function exists! </p>';
    the_field('test_field');
  }
}

/***Woocommerse Refresh Cart***/

add_action( 'wp_footer', 'cart_refresh_update_qty', 100 );

function cart_refresh_update_qty() {
	if ( is_cart() ) {
		?>
		<script type="text/javascript">
			jQuery('div.woocommerce').on('change', 'input.qty', function(){
				setTimeout(function() {
					jQuery('[name="update_cart"]').trigger('click');
				}, 100 );
			});
		</script>
		<?php
	}
}

function author_log() { ?>
	<? if ( !is_user_logged_in() ): ?>
		<a href="#" rel="popup_name" class="poplight">Вход</a>
		<div id="popup_name" class="popup_block">
			<div id="popup_name_wrap">
				<a href="#" class="close"><span class="close">Х</span></a>
				<form action="<?php echo wp_login_url(get_permalink()); ?>"   id="loginForm" action="" method="post">
					<div class="field">
						<label>Имя пользователя:</label>
						<div class="input">
							<input type="text" name="log" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>"  id="login" />
						</div>
					</div>
					<div class="field">
						<a href="<?php bloginfo('url') ?>/login/?action=lostpassword" id="forgot">Забыли пароль?</a>
						<label>Пароль:</label>
						<div class="input">
							<input type="password" name="pwd" value="" id="pass" />
						</div>
					</div>
					<div class="submit">
						<button name="submit" type="submit">Войти</button>
						<label>
							<div style="font-size: 14px;padding: 5px;"><a href="<?php bloginfo('url') ?>/login/?action=register">Регистрация</a></div>
						</label>
					</div>
				</form>
			</div>
		</div>
		<? else: ?>
			<a href="#" rel="popup_name" class="poplight">Ваш профиль</a>
			<div id="popup_name" class="popup_block">
				<div id="popup_name_wrap">
					<a href="#" class="close"><span class="close">Х</span></a>
					<div id="loginForm" action="" method="post">
						<div class="cont-side">
							<?php global $current_user;  get_currentuserinfo(); echo get_avatar( $current_user->user_email, '96' ); ?>
							<span class="name"><?php global $user_login; get_currentuserinfo(); echo $user_login; ?></span>
							<?php global $user_ID; if( $user_ID ) : ?>
							<?php if( current_user_can('level_2') or current_user_can('level_10') ) : ?>
							<a href="<?php bloginfo('url') ?>/wp-admin/index.php">Администрирование</a>
							<?php else : ?>
							<?php endif; ?>
						<?php endif; ?>
						<a href="<?php bloginfo('url'); ?>/author/<?php echo $current_user->user_login; ?>">Профиль</a> | <a href="<?php bloginfo('url') ?>/wp-admin/profile.php" title="изменить">Изменить</a>
					<div class="submit">
						<a href="<?php echo wp_logout_url( $redirect ); ?>" title="Выйти">
							<button name="submit" type="submit">Выйти</button>
						</a>
						<div>
							<div>
							</div>
						</div>
					</div>
				<? endif?>
				<?php } ?>