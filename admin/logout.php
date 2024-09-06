<?php

	/**
	 * Require System Core
	 */
	require( dirname(__FILE__, 2) . '/core/core.php');


	/**
	 * Destory admin session
	 */

	Auth::destroy();

	header("Location: login.php");