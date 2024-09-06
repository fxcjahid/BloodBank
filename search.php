<?php

	/**
	 * Require System Core
	 */
	require('core/core.php');


	/**
	 * Require search's classes
	 */
	require_once('core/class/class.search.php');
	
	
	/**
	 * Include app template
	 */
	include_template('./app.php', [ 
		'title' => 'Search Blood App',
		'config' => $config,  
	]);
	
  
	/**
	 * Inlcude Header Component
	 */
	require_once('./component/header/header.php');

	
	/**
	 * Include Inline Search Bar full width
	 */
	include_once('./component/pages/serach/inline-serach-bar.php');

	
	/**
	 * Include Search Results Layout
	 */
	include_once('./component/pages/serach/results.php');

  
	/**
	 * Include footer
	 */
	require_once('./component/footer/footer.php');

 
 