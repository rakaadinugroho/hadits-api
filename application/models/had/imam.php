<?php namespace Model\Had;

/* This basic model has been auto-generated by the Gas ORM */

use \Gas\Core;
use \Gas\ORM;

class Imam extends ORM {
	
	public $primary_key = 'imamId';

	function _init()
	{
		self::$fields = array(
			'imamId' => ORM::field('auto[10]'),
			'namaTabel' => ORM::field('char[255]'),
			'longNama' => ORM::field('char[255]'),
			'imamSorting' => ORM::field('int[10]'),
		);

	}
}