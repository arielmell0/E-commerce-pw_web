<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\ClientsModel;

class Clients extends Controller{

    public function listClients(){
        $clients = new ClientsModel();
        
        $data = [
            'clients' => $clients -> getClients()
            //Mostrar os clientes na tela
        ];
        
        echo view('admin/templates/header');
        echo view('admin/clients/list', $data);
        echo view('admin/templates/footer');
        
    }

    public function details($id){
        $clients = new ClientsModel();

        $data = [
            'client' => $clients->getClients($id)
        ];
        
        echo view('admin/templates/header');
        echo view('admin/clients/details', $data);
        echo view('admin/templates/footer');
    }

    public function insert(){
        echo view('admin/templates/header');
        echo view('admin/clients/insert');
        echo view('admin/templates/footer');
    }

    public function insertAction(){
        $clients = new ClientsModel();
        $data = [
            'name' => $this -> request -> getVar('name'),
            'email' => $this -> request -> getVar('email'),
            'phone' => $this -> request -> getVar('phone'),
            'email' => $this -> request -> getVar('email'),
            'address' => $this -> request -> getVar('address')
        ];
    }

    public function update(){

    }

    public function updateAction($id){
        $clients = new ClientsModel();
        $data = [
            'name' => $this -> request -> getVar('name'),
            'email' => $this -> request -> getVar('email'),
            'phone' => $this -> request -> getVar('phone'),
            'email' => $this -> request -> getVar('email'),
            'address' => $this -> request -> getVar('address')
        ];

        $clients-> update($id, $data);
        return redirect() -> to(base_url('admin/clients'));
    }



}