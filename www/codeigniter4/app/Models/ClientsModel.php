<?php

namespace App\Models;
use CodeIgniter\Model;

class ClientsModel extends Model{
    protected $table = 'clients';
    protected $primaryKey = 'idClient';
    protected $allowedFields = [
        'name', 'email', 'phone', 'address'
    ];

    public function getClients($idClient = null){

        if($idClient == null):
            return $this -> findAll();
        else:
            return $this -> find($idClient);
        endif;

    }

    function getClientsFor($search) {   
        return $this -> asArray() 
        -> like('idClient', $search) 
        -> orLike('name', $search)
        -> orLike('phone', $search)
        -> orLike('email', $search)
        -> orLike('address', $search)
        -> findAll();
    }

}