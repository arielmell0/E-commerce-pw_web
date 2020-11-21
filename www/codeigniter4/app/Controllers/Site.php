<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Site extends Controller{

    public function index(){
        $this->view();
    }

    public function view($page = 'home'){

        $data['title'] = ucfirst($page);

        echo view('templates/header.php', $data);
        echo view('site/' . $page, $data);
        echo view('templates/footer.php', $data);
    }
}