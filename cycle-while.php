
<!--Вывод цикл материалов -->
<?php if ( have_posts() ) : query_posts('ID=?');
    while (have_posts()) : the_post(); ?>
		
		<?php echo the_title();?>
		
		<?php echo the_content();?>
		<!--Вывод добавленных полей -->
		<?php echo get_post_meta($post->ID, 'row-title' ,true);?>
		<!--Вывод картинки миниатюры с размерами-->
		<?php the_post_thumbnail(array(220, 220)); ?>
		

<?php endwhile; endif; wp_reset_query(); ?>	
<!--Вывод названия и описания сайта -->
		<?php echo get_cat_name(4);?>	
		
		<?php echo get_bloginfo('name');?>


<!--Вывод кликабельной картинки с popap увеличением -->		
<?php if ( has_post_thumbnail()) : ?>
    
		<a href="<?php
    
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
    
		echo $large_image_url[0];?>" title="<?php the_title_attribute(); ?>" >
    
		<?php the_post_thumbnail(array(220, 220)); ?>
     
		 </a>

<?php endif; ?>	
	