<?php

namespace App\Core;

abstract class Sql
{

    private $pdo;

    public function __construct()
    {
        //Plus tard il faudra penser au singleton
        try{
            $this->pdo = new \PDO( DBDRIVER.":host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME , DBUSER , DBPWD
                , [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING]);
        }catch(\Exception $e){
            die("Erreur SQL : ".$e->getMessage());
        }
    }

    protected function save(): void
    {
        $getCalledClassExploded = explode("\\", strtolower(get_called_class())); // App\Model\User
        $table = DBPREFIXE.end($getCalledClassExploded);

        $sql = "INSERT INTO ".$table." (firstname, lastname) VALUES (:firstname , :lastname)";

        echo $sql;

        $queryPrepared = $this->pdo->prepare($sql);
        $queryPrepared->execute( ["lastname"=>"SKRZYPCZYK", "firstname"=>"yves"] );

        //Si ID null alors insert sinon update
    }




}