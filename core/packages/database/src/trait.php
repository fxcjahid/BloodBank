<?php

namespace Database;

trait Handler
{
	
	/**
	 * Add table comlumn
	 * @param $name
	 * @param $value
	 * @return new
	 */
	public function addColumn(string $name, string $value)
	{ 
		 
		$columnKey = explode(",", $name);
		 
		 
 
		$this->column = sprintf("'%s',", implode("', '", $columnKey));

		echo '<pre>';
			print_r($this->column);
		echo '</pre>';

	} 
} 