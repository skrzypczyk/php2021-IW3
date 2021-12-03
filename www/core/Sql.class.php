<?php

namespace App\Core;

abstract class Sql
{

    public function __construct()
    {
        echo "constructeur de SQL";
    }

    protected function save(): void
    {
        echo "Insertion en BDD";
    }

}