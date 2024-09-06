<?php

	/**
	 * Require System Core
	 */
	require('core/core.php');
  
	
	/**
	 * Include app template
	 */
	include_template('./app.php', [ 
		'title' => 'Contact Us',
		'config' => $config,  
	]);
	
  
	/**
	 * Inlcude Header Component
	 */
	require_once('./component/header/header.php');

	
	/**
	 * Include contact layout
	 */
	include_once('./component/pages/contact/content.php');
 
 
	/**
	 * Include footer
	 */
	require_once('./component/footer/footer.php');

 
 