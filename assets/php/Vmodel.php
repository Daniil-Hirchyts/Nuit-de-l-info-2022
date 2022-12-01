<?php
class Vmodel{
    require_once 'indexx.php';
    private $pdo;
    $conf=new Conf();
    $pdo=new PDO("mysql:host=$hostname;dbname=$databaseName",$login,$password);
    public function__construct{

    }
    public function getPdo{

    return $this->$pdo;

    }
    $hostname=$conf->getHostname();
    $databaseName=$conf->getDatabaseName();
    $login=$conf->getLogin();
    $password=$conf->getPassword();
}


?>