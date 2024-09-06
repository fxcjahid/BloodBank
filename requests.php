<?php

	/**
	 * Require System Core
	 */
	require('core/core.php');

  
	/**
	 * Require form request classes 
	 */
	require('./core/class/class.request-form.php');
  

	/**
	 * Include app template
	 */
	include_template('./app.php', [ 
		'title' => 'Send Blood Request',  
		'config' => $config,
	]);


	/**
	 * Inlcude Header Component
	 */
	require_once('./component/header/header.php');

 
	/**
	 * Include request Form
	 */
	include_once('./component/pages/request/form.php');

		
	/**
	 * Include footer
	 */
	require_once('./component/footer/footer.php');
	 