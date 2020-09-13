<?php
class clientsController {

    public function index()
    {

    }

    public function register()
    {
        require_once('views/templates/header.php');
        require_once('views/clients/register.php');
        require_once('views/templates/footer.php');
    }

    public function registerView(){
        $client = array (
            'email' => $_POST['email'],
            'name' => $_POST['name'],
            'sexo' => $_POST['sexo'],
            'endereco' => $_POST['endereco'],
            'telefone' => $_POST['telefone'],
            'linguagens' => $_POST['linguagens']
        );

        require_once('views/templates/header.php');
        require_once('views/clients/registerView.php');
        require_once('views/templates/footer.php');

    }

    public function listClient () 
    {
        require_once('models/clientsModel.php');
        $client = new clientsModel();
        $client -> listClients();
        $result = $client -> getConsult();

        $arrayClients = array();

        while($line = $result -> fetch_assoc()){
            array_push($arrayClients, $line);
        }

        require_once('views/templates/header.php');
        require_once('views/clients/listClients.php');
        require_once('views/templates/footer.php');
    }

}
?>