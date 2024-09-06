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
		'title' => 'Manage Blood Request - Admin',
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
	require('class/admin.request.php');
	 

	/**
	 * Include Manage request
	 */
	require_once('./component/page/request/edit.php');
   
	 
	/**
	 * Include footer
	 */
	require_once('component/footer/footer.php');
