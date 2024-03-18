<?php

class registra_usuario{

    private $host = 'localhost';

    private $usuario = 'root';

    private $senha = '';

    private $database = 'cadastro_clientes_cid';

    public function conecta_mysql(){

        $cid = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        mysqli_set_charset($cid, 'utf8');

        if(mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com bd mysql:'.mysqli_connect_errno();
        }
        return $cid;
    }
    
    






}



?>