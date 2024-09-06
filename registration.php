<?php

	/**
	 * Require System Core
	 */
	require('core/core.php');

	
	/**
	 * Require registration classes 
	 */
	require('./core/class/class.registration-form.php');  
	

	/**
	 * Include app template
	 */
	include_template('./app.php', [ 
		'title' => 'Donor Registration',  
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
	 * Include signUp Form
	 */
	include_once('./component/pages/signup/form.php');

		
	/**
	 * Include footer
	 */
	require_once('./component/footer/footer.php');
	 
 