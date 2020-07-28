<?php namespace App\Controllers;

class Edit extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('edit/index');		
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
