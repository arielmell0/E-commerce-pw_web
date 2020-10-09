<?php
class ClientsController
{

    var $ClientModel;

    public function __construct() //nao permite que tu volte para a mesma pagina e pede login de novo, ele chama automaticamente o __construct
    {
        if(!isset($_SESSION['login'])){
            header('Location:index.php?controller=main&action=login');
        }
        require_once('models/ClientsModel.php');
        $this -> ClientModel = new ClientsModel();
    }


    public function listClients(){

        $this -> ClientModel -> getClients();
        $result = $this -> ClientModel -> getConsult();

        $arrayClients = array();

        while($line = $result -> fetch_assoc()){
            array_push($arrayClients,$line);
        }

        require_once('views/templates/header.php');
        require_once('views/clients/listClients.php');
        require_once('views/templates/footer.php');
    }

    public function insertClient()
    {
        require_once('views/templates/header.php');
        require_once('views/clients/insertClient.php');
        require_once('views/templates/footer.php');
    }

    public function insertClientAction()
    {
        $arrayClient['name'] = $_POST['name'];
        $arrayClient['email'] = $_POST['email'];
        $arrayClient['phone'] = $_POST['phone'];
        $arrayClient['address'] = $_POST['address'];

        $this -> ClientModel -> insertClient($arrayClient);

        header('Location:index.php?controller=clients&action=listClients');        
    }

    public function updateClient($idClient)
    {
        $this -> ClientModel -> getClient($idClient);
        $result = $this -> ClientModel -> getConsult();
        
        if($arrayClient = $result->fetch_assoc()){
            require_once('views/templates/header.php');
            require_once('views/clients/updateClient.php');
            require_once('views/templates/footer.php');
        }
    }

    public function updateClientAction($idClient)
    {
        $arrayClient['idClient'] = $idClient;
        $arrayClient['name'] = $_POST['name'];
        $arrayClient['email'] = $_POST['email'];
        $arrayClient['phone'] = $_POST['phone'];
        $arrayClient['address'] = $_POST['address'];

        $this -> ClientModel -> updateClient($arrayClient);

        header('Location:index.php?controller=clients&action=listClients');  

    }

    public function deleteClient($idClient)
    {
        $this -> ClientModel -> deleteClient($idClient);
        
        header('Location:index.php?controller=clients&action=listClients');  
    }
}

?>
