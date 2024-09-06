<?php

	/**
	 * Require System Core
	 */
	require('core/core.php');


	/**
	 * Destory User session
	 */

	Auth::destroy();

	header("Location: login.php");