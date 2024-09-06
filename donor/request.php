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
	 * Require Request classes
	 */
	require( dirname(__FILE__, 2) . '/core/class/user.request.php');
	

	/**
	 * Include app template
	 */
	include_template( dirname(__FILE__, 2) . '/app.php', [ 
		'title' => 'Blood Request',  
		'config' => $config,
	]);
	
  
	/**
	 * Inlcude Header Component
	 */
	require_once( dirname(__FILE__, 2) . '/component/header/header.php');
 

	/**
	 * Inlcude Donor's Layout
	 */
	require_once( dirname(__FILE__, 2) . '/donor/component/page/layout.php');
 
 
	/**
	 * Inlcude Requestes Table
	 */
	require_once( dirname(__FILE__, 2) . '/donor/component/page/request/table.php');
  

	/**
	 * Include footer
	 */
	require_once( dirname(__FILE__, 2) . './component/footer/footer.php');
   