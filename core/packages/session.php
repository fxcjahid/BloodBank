<?php

/**
 * Session manage
 */

class Session
{

	public function __construct()
	{
		self::init();
	}

	/**
	 * Initial session
	 */
    public static function init()
	{
    	session_start();
    }

	/**
	 * set session key
	 * @param string $key
	 * @param string $value
	 */
    public static function set($key, $value)
	{
        $_SESSION[$key] = $value;
    }

	/**
	 * get exiting session
	 * @return boolean | $value
	 */
    public static function get($key)
	{
        if (isset($_SESSION[$key]))
		{
            return $_SESSION[$key];
        } 
		else {
            return FALSE;
        }
    } 

}
 