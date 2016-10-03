<?php 

add_theme_support('post-thumbnails' );

function mipugin_register_sidebar() {
	register_sidebar(
		array (
			'id' => 'sidebar-footer',
			'name' => 'Sidebar del Footer',
			'description' => 'Sidebar donde colocar los links del footer'
			)
		);
}  

add_action('widgets_init', 'miplugin_register_sidebar');
 ?>