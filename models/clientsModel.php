<?php

class clientsModel{

    var $result;

    public function listClients() 
    {
        require_once('db/connectClass.php');
        $Oconn = new connectClass();
        $Oconn -> openConnect();
        $conn = $Oconn -> getConn();

        $sql = 'SELECT * FROM clients';

        $this -> result = $conn -> query($sql);

    }

    public function getConsult()
    {
        return $this -> result;
    }

}

?>