<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsersModel;

class Users extends Controller{

    public $userModel = new UsersModel;

    public function validadeLogin(){

        $userName = $this -> request -> getVar('login');
        $userPassword = $this -> request -> getVar('password');
    }

    if($user = $userModel -> getUser($userName)):
        if($userPassword == $user['password']):
            $session = \Config\Services::session();
            $session -> set('user, $user');
            return redirect()->to(base_url('admin'));
        else:

        endif;
    else:
        echo ('Usuário não existe!');
    endif;

}

?>