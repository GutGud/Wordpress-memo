<?php

//Отключение неиспользуемых подключений в heder wordpress
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_generator');
//Включение админбара
show_admin_bar(false);
//Настройка и подключение SVG картинки на примере логотипа
function logo_widget_init() {

	register_sidebar( array(
		'name'          => 'Логотип SVG',
		'id'            => 'logo',
    'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<span class="hidden">',
		'after_title'   => '</span>',
	) );

}
add_action( 'widgets_init', 'logo_widget_init' );

// Load up our awesome theme options 
// Подключение файла ваших тем-скинов
require_once ( get_stylesheet_directory() . '/theme-options.php' );
//Позволяет темам или плагинам регистрировать поддержку новых возможностей в WordPress 
//(поддержка миниатюр, форматов записей и т.д.)
add_theme_support( 'post-thumbnails' );
