<?php

	/**
	 * Require System Core
	 */
	require('core/core.php');


	/**
	 * Require Donor's classes
	 */
	require_once('core/class/class.donar.php');
	
	
	/**
	 * Include app template
	 */
	include_template('./app.php', [ 
		'title' => 'Blood Donation App',
		'config' => $config,  
	]);
	
  
	/**
	 * Inlcude Header Component
	 */
	require_once('./component/header/header.php');

	
	/**
	 * Include Hero Search Bar full width
	 */
	include_once('./component/pages/home/hero-serach-bar.php');


	/**
	 * Include blood group statistics
	 */
	include_once('./component/pages/home/lessy-grid.php');


	/**
	 * Include flex carousel slider
	 */
	include_once('./component/pages/home/flex-slider-carousel.php');

	
	/**
	 * Include footer
	 */
	require_once('./component/footer/footer.php');

 
 