<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\UsersModel;

class Users extends Controller{

    public function validateLogin(){

    $userModel = new UsersModel;
    
    $userName = $this -> request -> getVar('login');
    $userPassword = $this -> request -> getVar('password');

    if($user = $userModel -> getUser($userName)):

        if($userPassword == $user['password']):
            $session = \Config\Services::session();
            $session -> set('user', $user);
            return redirect()->to(base_url('admin'));
        else:
             return redirect()->to(base_url('admin'));
        endif;

    else:
        return redirect()->to(base_url('admin'));
    endif;

    }

}

?>