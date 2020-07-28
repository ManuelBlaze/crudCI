<?php namespace App\Controllers;

use App\Models\ContactosModel;

class Delete extends BaseController
{
	public function delete(int $id)
	{

		$contactosmodel = new ContactosModel();
		// $contactosArray = $contactosmodel->findAll();

		if($contactosmodel->delete($id)){
            return redirect()->to('/contactos')->with('message', 'Deleted success');

        }else{
            return redirect()->to('/contactos')->with('message', 'Deleted failed');
        }

 		echo view('contactos/index');
		echo view('templates/footer');

	}

	//--------------------------------------------------------------------

}