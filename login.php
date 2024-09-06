<?php

	/**
	 * Require System Core
	 */
	require('core/core.php');

	
	/**
	 * Prevent to view if user already loggin
	 */
	Auth::isUserLogin();

	
	/**
	 * Require user's classes 
	 */
	require('./core/class/class.user-login.php');
	

	/**
	 * Include app template
	 */
	include_template('./app.php', [ 
		'title' => 'Donor Login',  
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
	 * Include login view
	 */
	include_once('./component/pages/login/form.php');

	
	/**
	 * Include footer
	 */
	require_once('./component/footer/footer.php');
  