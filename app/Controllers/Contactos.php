<?php namespace App\Controllers;

use App\Models\ContactosModel;

class Contactos extends BaseController
{
	public function index()
	{

		$contactosmodel = new ContactosModel();
		$contactosArray = $contactosmodel->findAll();

		$data=[
			'contactos' => $contactosArray
		];

		echo view('templates/header');
		echo view('contactos/index', $data);		
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
