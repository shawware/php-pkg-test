<?php

namespace Shawware\PPT\Test;

class FirstClass
{
	/**
	 * @var string name
	 */
	public $name;
	
	/**
	 * Construct a new first class name.
	 * 
	 * @param string $name the name to use
	 */
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	/**
	 * @return string this object's name
	 */
	public function name()
	{
		return $this->name;
	}
}
