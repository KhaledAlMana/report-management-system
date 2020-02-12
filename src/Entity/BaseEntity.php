<?php
namespace App\Entity;

abstract class BaseEntity
{
	protected $dbh;  // Database Handler

	public function __construct($dbh)
	{
		$this->dbh = $dbh;
	}

}
