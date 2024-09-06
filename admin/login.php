<?php

	/**
	 * Require System Core
	 */
	require( dirname(__FILE__, 2) . '/core/core.php');


	/**
	 * Prevent to view if admin already loggin
	 */
	Auth::isAdminLogin();


	/**
	 * Require Login classes
	 */
	require('class/admin.login.php');
  

	/**
	 * Include app template
	 */
	include_template('./app.php', [ 
		'title' => 'Admin Panel',
		'config' => $config,  
	]);
	 

	/**
	 * Include Login Form
	 */
	require_once('./component/page/login/form.php');
   
	 
	/**
	 * Include footer
	 */
	require_once('./component/footer/footer.php');

 
 