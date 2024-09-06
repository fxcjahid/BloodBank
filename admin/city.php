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
		'title' => 'Manage City - Admin',
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
	 * Require City classes
	 */
	require('class/admin.city.php');
 

	/**
	 * Include Edit form
	 */
	require_once('./component/page/city/edit.php');
 

	/**
	 * Include Create New form
	 */
	require_once('./component/page/city/new.php');
 

	/**
	 * Include Manage City Table
	 */
	require_once('./component/page/city/table.php');
   
	 
	/**
	 * Include footer
	 */
	require_once('component/footer/footer.php');
