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
		'title' => 'Manage State - Admin',
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
	 * Require State classes
	 */
	require('class/admin.state.php');


 	/**
	 * Include Edit form
	 */
	require_once('./component/page/state/edit.php');


	/**
	 * Include Create New form
	 */
	require_once('./component/page/state/new.php');


	/**
	 * Include Manage Request blood Table
	 */
	require_once('./component/page/state/table.php');
   
	 
	/**
	 * Include footer
	 */
	require_once('component/footer/footer.php');
