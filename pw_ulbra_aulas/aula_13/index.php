<?php
session_start();

if (!isset($_GET['controller'])) {
} else {
    switch ($_REQUEST['controller']) {
        case 'clients':
            require_once('controllers/ClientsController.php');
            $Client = new ClientsController();
            if (!isset($_GET['action'])) {
            } else {
                switch ($_REQUEST['action']) {
                    case 'listClients':
                        $Client->listClients();
                        break;

                    case 'insertClient':
                        $Client->insertClient();
                        break;

                    case 'updateClient':
                        $id = $_GET['id'];
                        $Client->updateClient($id);
                        break;

                    case 'deleteClient':
                        $id = $_GET['id'];
                        $Client->deleteClient($id);
                        break;
                }
            }
            break;
    }
}
