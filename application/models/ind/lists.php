<?php namespace Model\Ind;

/* This basic model has been auto-generated by the Gas ORM */

use \Gas\Core;
use \Gas\ORM;

class Lists extends ORM {
	
	public $table = 'ind_list';
	public $primary_key = 'ID_Indeks';

	function _init()
	{
		self::$fields = array(
			'ID_Indeks' => ORM::field('int[11]'),
			'Judul_Indeks' => ORM::field('char[255]'),
		);

	}
}