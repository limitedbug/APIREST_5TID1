<?php 
    class connection {
        private $host, $db_name, $user, $password, $connection, $port;

        function __construct(){
            $data_list = $this.connection_data();
            foreach ($datakust as $row => $value) {
                $this->host = $value['host'];
                $this->db_name = $value['db_name'];
                $this->user = $value['user'];
                $this->password = $value['password'];
                $this->port = $value['port'];
                
            }
            $this->connection = new mysqli($this->host,$this->user,$this->password,$this->db_name,$this->port);
            if($this->connection->connect_errno){
                echo "Error de conexión!!";
                die();
            }
        }


        private function connection_data(){
            $dir = dirname(__FILE__);
            $data = file_get_contents($dir."/config");
            return json_decode($data, true);
        }


    }
?>