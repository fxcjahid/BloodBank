<?php

class Alert extends session
{
	/**
	 * Destory exting message
	 */
	public function clear()
	{
		self::set(
			"error",  ""
		); 
		self::set(
			"success",  ""
		); 
		self::set(
			"info",  ""
		); 
	}	
}