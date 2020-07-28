<?php namespace App\Controllers;

class Add extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('add/index');		
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
