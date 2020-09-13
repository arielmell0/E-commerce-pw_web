<?php

    if(!isset($_GET["controller"])) {
        require_once("controllers/site.php");
        $site = new siteController();
        $site -> home();
    }else{
        switch($_REQUEST["controller"]){
            case "site":
                require_once("controllers/site.php");
                $site = new siteController();
                if(!isset($_GET["acao"])) {
                    $site -> home();
                }else{
                    switch($_REQUEST["acao"]){
                        case "home";
                            $site -> home();
                        break;

                        case "sobre";
                            $site -> sobre();
                        break;

                        case "produtos";
                            $site -> produtos();
                        break;

                        case "contato";
                            $site -> contato();
                        break;
                    }
                }

            break;  
            
            case 'clients':
                require_once('controllers/clients.php');

                $client = new clientsController();
                if(!isset($_GET['action'])) {
                    $client -> index();
                } else {
                    switch($_REQUEST['action']) {
                        case 'register':
                            $client -> register();
                        break;

                        case 'registerView':
                            $client -> registerView();
                        break;

                        case 'listclient':
                            $client -> listClient();
                        break;
                    }
                }
            break;    
        }
    }

?>