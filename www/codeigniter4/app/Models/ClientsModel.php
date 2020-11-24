<?php

namespace App\Models;
use CodeIgniter\Model;

class ClientsModel extends Model{
    protected $table = 'clients';
    protected $primaryKey = 'idClient';

    public function getClients(){
        return $this -> findAll();
    }
}