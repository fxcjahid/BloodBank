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
		'title' => 'Manage User / Donor - Admin',
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
	 * Require User classes
	 */
	require('class/admin.user.php');


	/**
	 * Include Manage User / Donor Table
	 */
	require_once('./component/page/user/table.php');
   
	 
	/**
	 * Include footer
	 */
	require_once('component/footer/footer.php');
