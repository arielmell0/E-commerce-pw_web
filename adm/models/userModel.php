<?php 

class UsersModel {

    var $result;

    public function getUser($login)
    {
        require_once('bd/ConnectClass.php');
        $Oconn = new ConnectClass();
        $conn = $Oconn -> create();

        $sql = "
            SELECT * FROM users
            WHERE user = '{$login}' 
        ";

        $this -> result = $conn -> query($sql);
    }

    public function getConsult()
    {
        return $this -> result;
    }
}
?>