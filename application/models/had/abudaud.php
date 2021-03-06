<?php namespace Model\Had;

/* This basic model has been auto-generated by the Gas ORM */

use \Gas\Core;
use \Gas\ORM;

class Abudaud extends ORM {
	public $primary_key = 'NoHdt';
	function _init()
	{
		self::$relationships = array (
            'tema'			=>     ORM::has_many('\\Model\\Tema\\Abudaud'),
        );
		self::$fields = array(
			'NoHdt' => ORM::field('int[11]'),
			'Isi_Arab' => ORM::field('string'),
			'Isi_Indonesia' => ORM::field('string'),
			'Isi_Arab_Gundul' => ORM::field('string'),
		);

	}
}