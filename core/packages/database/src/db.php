<?php
	
	/**
	 * CRUD
	 * Create , Read , Update , Delete
	 */
	
namespace Database;
  
class DB
{
	public $table;

	/**
	 * Insert into datbase
	 * @var string $table 
	 */ 
	public static function insert(string $table)
	{ 
		return new insert($table);
	} 
}