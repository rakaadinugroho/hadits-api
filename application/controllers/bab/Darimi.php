<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * darimi bab
 *
 * @package    Controller\Bab
 * @author     Hadits API Dev
 * @copyright  (c) 2013
 * @version    0.1
 */

require APPPATH.'/libraries/REST_Controller.php';
class darimi extends REST_Controller{


	function __construct()
	{
		parent::__construct();
		/**
		* @var  Set devalut orm and response variable
		*/
		$this->orm 			= new Model\databab\Darimi();
		$this->arrResponse 	= array();
	}

	function all_get($limit = 0)
	{
		// page a new contact object
		if($limit == 0)
		{
			$objBabDarimi = $this->orm->all();
		}else
		{
			$objBabDarimi = $this->orm->limit($limit)->all();	
		}
		foreach ($objBabDarimi as $key => $value) {
			// Pasrse data in arrResponse
			$this->arrResponse[$key]['id_bab'] 			= $value->ID_Bab;
			$this->arrResponse[$key]['bab_indonesia'] 	= $value->Bab_Indonesia;
			$this->arrResponse[$key]['bab_arab'] 		= $value->Bab_Arab;
		}
		
		if($objBabDarimi)
		{
			$this->response($this->arrResponse, 200);
        }

        else
        {
            $this->response(array('error' => 'Couldn\'t find any users!'), 404);
        }
	}

	/**
	 * Get Darimi bab data with specific id
	 * 
	 * @param   string  $intid   Bab Darimi id
	 * @return  json
	 */
	function id_get($intId = 0)
	{
		// Find in database with id
		$objBabDarimi = $this->orm->find($intId);

		// Pasrse data in arrResponse
		$this->arrResponse['id_kitab'] 			= $objBabDarimi->ID_Kitab;
		$this->arrResponse['id_bab'] 			= $objBabDarimi->ID_Bab;
		$this->arrResponse['bab_indonesia'] 	= $objBabDarimi->Bab_Indonesia;
		$this->arrResponse['bab_arab'] 			= $objBabDarimi->Bab_Arab;
		$this->arrResponse['kitab_indonesia'] 	= $objBabDarimi->kitab()->Kitab_Indonesia;
		$this->arrResponse['kitab_arab'] 		= $objBabDarimi->kitab()->Kitab_Arab;

		if($objBabDarimi)
		{
			$this->response($this->arrResponse, 200);
		}
		else
		{
			$this->response(array('error' => 'Couldn\'t find any users!'), 404);
		}
	}

	function idkitab_get($intId = 0)
	{
		// Find in database with id
		$objBabDarimi = $this->orm->find_by_ID_Kitab($intId);

		$this->arrResponse['id_kitab']	 		= $objBabDarimi[0]->ID_Kitab;
		$this->arrResponse['kitab_indonesia']	= $objBabDarimi[0]->kitab()->Kitab_Indonesia;
		$this->arrResponse['kitab_arab'] 		= $objBabDarimi[0]->kitab()->Kitab_Arab;
		foreach ($objBabDarimi as $key => $value) {
			// Pasrse data in arrResponse
			$this->arrResponse[$key]['id_bab'] 			= $value->ID_Bab;
			$this->arrResponse[$key]['bab_indonesia'] 	= $value->Bab_Indonesia;
			$this->arrResponse[$key]['bab_arab'] 		= $value->Bab_Arab;
		}

		if($objBabDarimi)
		{
			$this->response($this->arrResponse, 200);
		}
		else
		{
			 $this->response(array('error' => 'Couldn\'t find any users!'), 404);
		}
	}
}