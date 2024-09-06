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
		'title' => 'Create Donor - Admin',
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
	 * Require user classes
	 */
	require('class/admin.user.php');
	 

	/**
	 * Include New Donor
	 */
	require_once('./component/page/user/new.php');
   
	 
	/**
	 * Include footer
	 */
	require_once('component/footer/footer.php');
