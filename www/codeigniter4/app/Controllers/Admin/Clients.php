<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\ClientsModel;

class Clients extends Controller{

    public function listClients(){
        $clients = new ClientsModel();
        $search = $this -> request -> getVar();

        if(isset($search['search'])){
            $data = [
                'clients' => $clients -> getClientsFor($search['search'])
                //Mostrar os clientes na tela
            ];
        } else {
            $data = [
                'clients' => $clients -> getClients()
                //Mostrar os clientes na tela
            ];
        }
        
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
            'address' => $this -> request -> getVar('address')
        ];

        $clients -> insert($data);
        return redirect() -> route('admin/clients');
    }

    public function update($id){
        $clients = new ClientsModel();

        $data = [
            'client' => $clients->getClients($id)
        ];

        echo view('admin/templates/header');
        echo view('admin/clients/update', $data);
        echo view('admin/templates/footer');
    }

    public function updateAction($id){

        $clients = new ClientsModel();
        $data = [
            'name' => $this -> request -> getVar('name'),
            'email' => $this -> request -> getVar('email'),
            'phone' => $this -> request -> getVar('phone'),
            'address' => $this -> request -> getVar('address')
        ];

        $clients-> update($id, $data);
        return redirect() -> route('admin/clients');
    }

    public function delete($id){
        $clients = new ClientsModel();
        $clients -> delete($id);
        return redirect() -> route('admin/clients');
        
    }

}