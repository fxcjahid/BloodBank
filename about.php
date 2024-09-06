<?php

	/**
	 * Require System Core
	 */
	require('core/core.php');
  
	
	/**
	 * Include app template
	 */
	include_template('./app.php', [ 
		'title' => 'About Us',
		'config' => $config,  
	]);
	
  
	/**
	 * Inlcude Header Component
	 */
	require_once('./component/header/header.php');

	
	/**
	 * Include about layout
	 */
	include_once('./component/pages/about/content.php');
 
 
	/**
	 * Include footer
	 */
	require_once('./component/footer/footer.php');

 
 