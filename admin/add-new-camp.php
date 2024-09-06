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
		'title' => 'Create New Camp - Admin',
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
	 * Require Camps classes
	 */
	require('class/admin.camp.php');
	 

	/**
	 * Include New Camp
	 */
	require_once('./component/page/camps/new.php');
   
	 
	/**
	 * Include footer
	 */
	require_once('component/footer/footer.php');
