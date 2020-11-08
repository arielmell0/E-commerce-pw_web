<?php

    class ConnectClass{

        var $conn;

        public function openConnect(){
            $servername = 'localhost:3306';
            $username = 'root';
            $password = '';
            $dbname = 'pw_exemple';
            $this -> conn = new mysqli($servername, $username, $password, $dbname);
        }

        public function getConn() {
            return $this -> conn;
        }
    }
