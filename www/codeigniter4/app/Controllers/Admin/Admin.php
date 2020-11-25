<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;

class Admin extends Controller{

    public function index(){
        $session = \Config\Services::session();
        if($session -> has('user')):
            //dar a pagina inicial
            echo view('admin/templates/header');
            echo view('admin/home');
            echo view('admin/templates/footer');
        else:
            $this -> login();
        endif;
    }

    public function login(){
        echo view('admin/users/login');
    }

    public function logout(){
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to(base_url('admin'));
    }

}

?>