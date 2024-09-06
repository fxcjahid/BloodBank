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
		'title' => 'Manage Blood Group - Admin',
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
	 * Require Blood classes
	 */
	require('class/admin.blood.php');


	/**
	 * Include Manage User / Donor Table
	 */
	require_once('./component/page/blood/table.php');
   
	 
	/**
	 * Include footer
	 */
	require_once('component/footer/footer.php');
