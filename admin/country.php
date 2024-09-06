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
		'title' => 'Manage Country - Admin',
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
	 * Require country classes
	 */
	require('class/admin.country.php');
 
	
 	/**
	 * Include Edit form
	 */
	require_once('./component/page/country/edit.php');


	/**
	 * Include Create New form
	 */
	require_once('./component/page/country/new.php');


	/**
	 * Include Manage City Table
	 */
	require_once('./component/page/country/table.php');
   
	 
	/**
	 * Include footer
	 */
	require_once('component/footer/footer.php');
