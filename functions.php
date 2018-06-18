<?php 
	//Incorporar CSS

	//Estilos CSS
	function dl_enqueue_style(){
		$theme_data = wp_get_theme();

		//Registrar estilos
		wp_register_style('main', get_parent_theme_file_uri('/css/main.css'),null, $theme_data->get('1.0'));
		//llamar estilos
		wp_enqueue_style('main');
	}

	add_action('wp_enqueue_scripts', 'dl_enqueue_style');

	//Incorporar JS

	//Registrar JS
	function dl_enqueue_scripts() {
		
	}
?>