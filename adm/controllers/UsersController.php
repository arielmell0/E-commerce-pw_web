<?php

class UsersController {
    public function validateLogin()
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        require_once('models/UserModel.php');
        $UserModel = new UsersModel();
        $UserModel -> getUser($login);

        $result = $UserModel -> getConsult();

        if($line = $result->fetch_assoc()){
            if($password == $line['password']){
                $_SESSION['login'] = $line['user'];
                header('Location:index.php?controller=main&action=index');
            }else {
                print('Senha inválida');
            }
        } else {
            print('usuario não existe');
        }
    }
}
?>