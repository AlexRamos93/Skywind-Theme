<?php 

	function wpb_customize_register($wp_customize){

		// index Section
		$wp_customize->add_section('index', array('title' => __('Index', 'wpbootstrap'),
			'description' => sprintf(__('Options for index', 'wpbootstrap')),
			'priority' => 130
		));

		//Header Background Image
		$wp_customize->add_setting('header_back_img', array(

			'default' => get_bloginfo('template_directory').'/public/img/slider-image.jpg',
			'type' => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_back_img', array(

			'label' => __('Background Image', 'wpbootstrap'),
			'section' => 'index',
			'settings' => 'header_back_img',
			'priority' => 1
		)));

		//Header Title
		$wp_customize->add_setting('header_title', array(

			'default' => _x('Juicy Title', 'wpbootstrap'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('header_title', array(

			'label' => __('Title', 'wpbootstrap'),
			'section' => 'index',
			'priority' => 2
		));

		//Header Text
		$wp_customize->add_setting('header_txt', array(

			'default' => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi malesuada, enim in porttitor dictum, metus diam mollis augue, eget dkhgcumsan magna', 'wpbootstrap'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('header_txt', array(

			'label' => __('Header Text', 'wpbootstrap'),
			'section' => 'index',
			'priority' => 3
		));

		//Header Button URL
		$wp_customize->add_setting('btn_url', array(

			'default' => _x('http://localhost/wordpress/', 'wpbootstrap'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('btn_url', array(

			'label' => __('Button URL', 'wpbootstrap'),
			'section' => 'index',
			'priority' => 4
		));

		//Header Button Text
		$wp_customize->add_setting('btn_text', array(

			'default' => _x('Learn More', 'wpbootstrap'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('btn_text', array(

			'label' => __('Button Text', 'wpbootstrap'),
			'section' => 'index',
			'priority' => 5
		));

		//Header Logo Image
		$wp_customize->add_setting('header_logo_img', array(

			'default' => 'http://localhost/wordpress/wp-content/uploads/2017/11/logo-slider.png',
			'type' => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo_img', array(

			'label' => __('Logo Image', 'wpbootstrap'),
			'section' => 'index',
			'settings' => 'header_logo_img',
			'priority' => 6
		)));

		// about Section
		$wp_customize->add_section('about', array('title' => __('about', 'wpbootstrap'),
			'description' => sprintf(__('Options for about', 'wpbootstrap')),
			'priority' => 130
		));

		//Header Background Image
		$wp_customize->add_setting('header_back_img', array(

			'default' => get_bloginfo('template_directory').'/public/img/slider-image.jpg',
			'type' => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_back_img', array(

			'label' => __('Background Image', 'wpbootstrap'),
			'section' => 'about',
			'settings' => 'header_back_img',
			'priority' => 1
		)));

		//Header Title
		$wp_customize->add_setting('header_title', array(

			'default' => _x('Juicy Title', 'wpbootstrap'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('header_title', array(

			'label' => __('Title', 'wpbootstrap'),
			'section' => 'about',
			'priority' => 2
		));

		//Header Text
		$wp_customize->add_setting('header_txt', array(

			'default' => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi malesuada, enim in porttitor dictum, metus diam mollis augue, eget dkhgcumsan magna', 'wpbootstrap'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('header_txt', array(

			'label' => __('Header Text', 'wpbootstrap'),
			'section' => 'about',
			'priority' => 3
		));

		//Header Button URL
		$wp_customize->add_setting('btn_url', array(

			'default' => _x('http://localhost/wordpress/', 'wpbootstrap'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('btn_url', array(

			'label' => __('Button URL', 'wpbootstrap'),
			'section' => 'about',
			'priority' => 4
		));

		//Header Button Text
		$wp_customize->add_setting('btn_text', array(

			'default' => _x('Learn More', 'wpbootstrap'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('btn_text', array(

			'label' => __('Button Text', 'wpbootstrap'),
			'section' => 'about',
			'priority' => 5
		));

		//Header Logo Image
		$wp_customize->add_setting('header_logo_img', array(

			'default' => 'http://localhost/wordpress/wp-content/uploads/2017/11/logo-slider.png',
			'type' => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo_img', array(

			'label' => __('Logo Image', 'wpbootstrap'),
			'section' => 'about',
			'settings' => 'header_logo_img',
			'priority' => 6
		)));
	}

	add_action('customize_register', 'wpb_customize_register');


?>