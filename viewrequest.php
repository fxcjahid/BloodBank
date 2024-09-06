<?php

	/**
	 * Require System Core
	 */
	require('core/core.php');


	/**
	 * Require blood request data classes 
	 */
	require('./core/class/class.request.php');
	
	
	/**
	 * Include app template
	 */
	include_template('./app.php', [ 
		'title' => 'Request For Blood Donation',  
		'config' => $config,
	]);
	
  
	/**
	 * Inlcude Header Component
	 */
	require_once('./component/header/header.php');
 
 
	/**
	 * Include view requested post
	 */
	include_once('./component/pages/view/single-item.php');

	
	/**
	 * Include footer
	 */
	require_once('./component/footer/footer.php');
 
