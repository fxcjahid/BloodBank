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
	 * Include dashboard class
	 */
	require('class/admin.dashboard.php');


 	/**
	 * Include app template
	 */
	include_template('./app.php', [ 
		'title' => 'Admin Panel',
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
	 * Include dashboard
	 */
	require_once('./component/page/dashboard/index.php');
   
	 
	/**
	 * Include footer
	 */
	require_once('component/footer/footer.php');
