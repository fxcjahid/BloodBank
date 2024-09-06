<?php

	/**
	 * Require System Core
	 */
	require( dirname(__FILE__, 2) . '/core/core.php');
	
	
	/**
	 * Require User's classes
	 */
	require( dirname(__FILE__, 2) . '/core/class/user.info.php');
	

	/**
	 * Require Donate classes
	 */
	require( dirname(__FILE__, 2) . '/core/class/user.donate.php');
	

	/**
	 * Include app template
	 */
	include_template( dirname(__FILE__, 2) . '/app.php', [ 
		'title' => 'Blood Donate',  
		'config' => $config,
	]);
	
  
	/**
	 * Inlcude Header Component
	 */
	require_once( dirname(__FILE__, 2) . '/component/header/header.php');

	
  	/**
	 * Include alert message
	 */
	include_once( dirname(__FILE__, 2) . '/component/pages/alert/message.php');


	/**
	 * Inlcude Donor's Layout
	 */
	require_once( dirname(__FILE__, 2) . '/donor/component/page/layout.php');
 
 
	/**
	 * Inlcude Donate Form
	 */
	require_once( dirname(__FILE__, 2) . '/donor/component/page/donate/form.php');
  

	/**
	 * Include footer
	 */
	require_once( dirname(__FILE__, 2) . './component/footer/footer.php');
   