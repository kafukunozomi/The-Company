<?php

    class Database
    {
        private $server_name   = "localhost";
        private $username      = "root";
        private $password      = "root"; //$password = ""; for XAMPP/MAC users
        private $db_name       = "the_company";
        protected $conn;

        public function __construct()
        {
            $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
            // mysqli = Represnts a connection between PHP and a MySQL database.
            // $this->conn is now the object the class mysqli
            // $this->conn holds the connection to the db

            if($this->conn->connect_error){
                die("Unable to connect tothe databse: " . $this->conn->connect_error);
            }
        }
    }


?>