<?php namespace App\Models;

use CodeIgniter\Model;

class ContactosModel extends Model {
    protected $table='contactos';
    protected $primarykey ='id';
    protected $returnType ='array';

    protected $allowedFields = ["nombre", "empresa", "telefono"];
}