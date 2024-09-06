<?php

	/**
	 * Require Template Rendering Package
	 */
	require_once(__DIR__ . '/packages/template.php');
	require_once(__DIR__ . '/packages/builtin.php');
	require_once(__DIR__ . '/packages/request.php');
	require_once(__DIR__ . '/packages/session.php'); 
	require_once(__DIR__ . '/packages/alert.php'); 
	require_once(__DIR__ . '/packages/auth.php'); 
	require_once(__DIR__ . '/packages/bulletproof.php'); 
 
	/**
	 * Config system
	 */
	include_once(dirname(__FILE__, 2) . '/settings.php');

	/**
	 * Databse Connection
	 */
	require_once(__DIR__ . '/class/class.database.php');

	/**
	 * Require global classes 
	 */ 
	require_once(__DIR__ . '/class/class.global.php');


	/**
	 * Session initial
	 */
	Session::init();