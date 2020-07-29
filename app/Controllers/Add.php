<?php namespace App\Controllers;

use App\Models\ContactosModel;

class Add extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('add/index');		
		echo view('templates/footer');
	}

	public function new() {
		$contactosmodel = new ContactosModel();

		if ($this->request->getMethod() === 'post'){
			$contacto = [
				'nombre' => $this->request->getPost('nombre'),
				'empresa' => $this->request->getPost('empresa'),
				'telefono' => $this->request->getPost('telefono')
			];

			if ($contactosmodel->save($contacto)) {
				return redirect()->to('/contactos')->with('message', 'contacto registrado');
			} else {
				return redirect()->to('/add')->with('message', 'contacto no registrado');
			}
		}
	}

	//--------------------------------------------------------------------

}
