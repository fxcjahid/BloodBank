<?php

	/**
	 * Require System Core
	 */
	require('./core/core.php');


	/**
	 * Require camps data classes 
	 */
	require('./core/class/class.camps.php');


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
	 * Include capms gallery view
	 */
	include_once('./component/pages/camps/gallery-view.php');
 
	
	/**
	 * Include footer
	 */
	require_once('./component/footer/footer.php'); 
	 
 