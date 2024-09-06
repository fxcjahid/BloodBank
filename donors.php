<?php

	/**
	 * Require System Core
	 */
	require('core/core.php');
 
	
	/**
	 * Require donar data classes 
	 */
	require('./core/class/class.donar.php');
 

	/**
	 * Include app template
	 */
	include_template('./app.php', [ 
		'title' => 'Donors',
		'config' => $config,  
	]);
	
  
	/**
	 * Inlcude Header Component
	 */
	require_once('./component/header/header.php');
  
	
	/**
	 * Include alert message
	 */
	include_once('./component/pages/alert/message.php');


	/**
	 * Include view requested post
	 */
	include_once('./component/pages/donors/grid-item.php');

	
	/**
	 * Include footer
	 */
	require_once('./component/footer/footer.php');

  