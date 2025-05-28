<?php

class Conexao{
    private static $conection;

    public static function getConn() {
        self::$conection =new \PDO ("mysql:host=localhost;dbname=teste_crud_user", "root", "");
        
        if(isset(self::$conection)){
            return self::$conection;
        }else{
            echo "Banco de Dados não foi conectado!!";
        }
    }
}
