<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Заголовок</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- <link rel="shortcut icon" href="favicon.png" /> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea/styles.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
	
	<!--Подключение своих тем в header-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/<?php
    $options = get_option('sample_theme_options');
    echo $options['selectinput'];?>.css" />
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
   <!--подключение header wordpress -->
    <?php wp_head(); ?>
    
</head>
<body>

	<header class="main_head bg_dark" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg" data-z-index="1">
						<!-- Вывод названия и дескрипшина сайта -->
						<h1><?php echo get_bloginfo('name');?></h1>
						<p><?php echo get_bloginfo('description');?></p>
			
	</header>