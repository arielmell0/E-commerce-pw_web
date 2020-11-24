<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ClientsModel;

class Clients extends Controller{
    
    public function listClients(){
        $clients = new ClientsModel();
        
        $data = [
            'clients' => $clients -> getClients(),
            'title' => 'Lista de clientes'
            //Mostrar os clientes na tela
        ];
        
        echo view('templates/header');
        echo view('clients/list', $data);
        echo view('templates/footer');
        
    }

}