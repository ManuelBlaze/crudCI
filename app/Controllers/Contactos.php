<?php namespace App\Controllers;

class Contactos extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('contactos/index');		
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
