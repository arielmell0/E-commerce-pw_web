<?php

    class UsersModel{
        var $result;

        public function getUser($login)
        {
            require_once('database/ConnectClass.php');
            $Oconn = new ConnectClass();
            $Oconn -> openConnect();
            $conn = $Oconn ->getConn();

            $sql = "
                SELECT * FROM users
                WHERE user = '{$login}'
            ";

            $this -> result = $conn -> query($sql);
        }

        public function getConsult()
        {
            return $this-> result;
        }
    }

?>