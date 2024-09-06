<?php

	/**
	 * DB-CRUD
	 * Create , Read , Update , Delete
	 * @author: fxcjahid
	 */
	
	namespace Database;

	include('trait.php');

class insert
{
	use Handler;
	
	private $table;
	public $column;

	public function __construct($table)
    {
        $this->table = $table; 
    }
  
	public function getSQL()
	{
		$SQL = "INSERT INTO `$this->table` ($this->column)";

		return $SQL;
	}
}