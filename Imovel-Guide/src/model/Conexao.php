<?php
namespace src\model;
use PDO;
use PDOException;


class Conexao
{

    public static function Connection()
    {
        try {
            $db_host = 'localhost';
            $db_name = 'corretores';
            $db_user = 'root';
            $db_pass = '';

            $pdo = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $pdo->setAttribute(PDO::ERRMODE_WARNING, true);
            // echo "Connected a $db_name em $db_host com success.";
            return $pdo;

        } catch (PDOException $e) {
            var_dump("Connection failed: \n" . $e->getMessage() . "\n Linha: \n" . $e->getLine());
          }
        
    }
}

Conexao::Connection();




