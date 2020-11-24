<?php

namespace App\Models;
use CodeIgniter\Model;

class ClientsModel extends Model{
    protected $table = 'clients';
    protected $primaryKey = 'idClient';

    public function getClients($idClient = null){

        if($idClient == null):
            return $this -> findAll();
        else:
            return $this -> find($idClient);
        endif;

    }
}