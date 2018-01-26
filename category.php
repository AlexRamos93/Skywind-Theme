<?php 

	if(in_category('3')) {

		include (get_template_directory() . '/single-3.php');
	} else if(in_category('6'))  {
		include (get_template_directory() . '/single-6.php');
	} else if(in_category('5'))  {
		include (get_template_directory() . '/category/concept-art.php');
	} else if(in_category('4'))  {
		include (get_template_directory() . '/category/screenshots.php');
	} else if(in_category('7'))  {
		include (get_template_directory() . '/category/video.php');
	} else {
		include (get_template_directory() . '/category/all.php');
	}

?>