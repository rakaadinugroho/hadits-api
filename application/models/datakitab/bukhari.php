<?php namespace Model\Datakitab;

/* This basic model has been auto-generated by the Gas ORM */

use \Gas\Core;
use \Gas\ORM;

class Bukhari extends ORM {
	
	public $primary_key = 'ID_Kitab';
	function _init()
	{
		self::$relationships = array (
            'bab'          =>     ORM::has_many('\\Model\\Databab\\Bukhari'),
            'tema'			=>     ORM::has_many('\\Model\\Tema\\Bukhari')
        );
		self::$fields = array(
			'ID_Kitab' => ORM::field('int[11]'),
			'Kitab_Indonesia' => ORM::field('char[255]'),
			'Kitab_Arab' => ORM::field('char[255]'),
		);

	}
}