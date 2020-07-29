<?php namespace App\Controllers;

use App\Models\ContactosModel;

class Edit extends BaseController
{
	public function index(int $id)
	{

		$model = new ContactosModel();
		$obj = $model->find($id);

		$data=[
			'id' => $obj['id'],
			'nombre' => $obj['nombre'],
			'empresa' => $obj['empresa'],
			'telefono' => $obj['telefono']
        ];

        echo view('edit/index', $data);
        echo view('templates/footer');
	}

	public function editar() {
		$contactosmodel = new ContactosModel();

		if ($this->request->getMethod() === 'post'){
			$id = $this->request->getPost('id');
			$contacto = [
				'id' => $this->request->getPost('id'),
				'nombre' => $this->request->getPost('nombre'),
				'empresa' => $this->request->getPost('empresa'),
				'telefono' => $this->request->getPost('telefono')
			];

			if ($contactosmodel->update($id, $contacto)) {
				return redirect()->to('/contactos')->with('message', 'contacto registrado');
			} else {
				return redirect()->to('/add')->with('message', 'contacto no registrado');
			}
		}
	}

	//--------------------------------------------------------------------

}
