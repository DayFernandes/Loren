<?php
class conexao{
    private static $instancia;

    public static function getConexao(){
        if (!isset(self::$instancia)){
            self::$instancia = new PDO ("mysql:host=localhost;
            dbname=banco_de_dados; charset=utf8", "root" , "");
            return self::$instancia;
        }else{
            return self::$instancia;
        }
    } 
}
?>