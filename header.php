<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
		<?php bloginfo('name'); ?> | 
		<?php is_front_page() ? bloginfo('description') : wp_title();?>
		</title>
	
	<meta charset="<?php bloginfo('charset'); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!--Bootstrap Responsive meta tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">

	<!-- CSS -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

	<!-- Bootstrap -->
  	<link href="<?php bloginfo('template_url');?>/public/css/bootstrap.min.css" rel="stylesheet">


  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

</head>
<body>
	
<!-- Menu Bar -->
	<nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <a class="navbar-brand" href="http://localhost/wordpress"><img src="<?php bloginfo('template_url');?>/public/img/logo-menu.png"></a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	    	<?php 
				$args = array(
				    'menu_class' => 'nav navbar-nav navbar-right'       
				);
				wp_nav_menu( $args ); 
			?>
	    </div>
	  </div>
	</nav>