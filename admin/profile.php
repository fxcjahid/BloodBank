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
		'title' => 'Profile - Admin',
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
	 * Require profile classes
	 */
	require('class/admin.profile.php');
	 

	/**
	 * Include profile layout
	 */
	require_once('./component/page/profile/form.php');
   
	 
	/**
	 * Include footer
	 */
	require_once('component/footer/footer.php');
