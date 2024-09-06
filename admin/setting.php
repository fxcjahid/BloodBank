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
		'title' => 'Setting - Admin',
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
	 * Require setting classes
	 */
	require('class/admin.setting.php');
	 

	/**
	 * Include setting
	 */
	require_once('./component/page/setting/index.php');
   
	 
	/**
	 * Include footer
	 */
	require_once('component/footer/footer.php');
