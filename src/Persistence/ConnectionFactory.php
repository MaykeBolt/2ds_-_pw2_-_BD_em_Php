<?php

namespace App\Persistence;

use App\SystemServices\MonologFactory;

class ConnectionFactory{
    //"create database sussy","use sussy;","create table amogus(id int PRIMARY KEY not null);","insert into amogus values (1);","use sussy;","select * from amogus;"
    static $dbuser='root'; //Perguntar sobre aonde conseguir o BD: Azure, Xampp? PhpMyAdmin?
    static $dbhost='localhost';
    static $dbname='sussy';
    static $password="";
    static $pdo;

    static function getConnectionInstance() {
        try {
            self::$pdo = new \PDO("mysql:host=".self::$dbhost.";dbname=".self::$dbname, self::$dbuser, self::$password);
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            MonologFactory::getInstance()->info("Conexão obtida com sucesso!!!");
        } 
        
        catch(\PDOException $ex) {
            MonologFactory::getInstance()->info("Falha ao obter conexão!");
            MonologFactory::getInstance()->info($ex->getMessage());
        }

        return self::$pdo;
    }
}

?>
