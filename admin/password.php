<?php

	/**
	 * Require System Core
	 */
	require( dirname(__FILE__, 2) . '/core/core.php');


	/**
	 * Prevent to view without logged
	 */
	Auth::preventNonAdminLogged();


 	/**
	 * Include app template
	 */
	include_template('./app.php', [ 
		'title' => 'Change Password - Admin',
		'config' => $config,  
	]);

	
	/**
	 * Include Topbar
	 */
	include_once('./component/topbar/index.php');
	

	/**
	 * Include sidebar
	 */
	include_once('./component/sidebar/index.php');
	 
	
	/**
	 * Require password classes
	 */
	require('class/admin.password.php');
	 

	/**
	 * Include profile layout
	 */
	require_once('./component/page/password/form.php');
   
	 
	/**
	 * Include footer
	 */
	require_once('component/footer/footer.php');
