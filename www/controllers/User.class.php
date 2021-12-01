<?php

namespace App\Controller;

use App\Core\User as UserClean;
use App\Core\View;

class User {


    public function login()
    {
        $view = new View("login");
        $view->assign("title", "Ceci est le titre de la page login");
    }

    public function logout()
    {
        echo "Se déconnecter";
    }


    public function register()
    {
        $view = new View("Register");
    }




}











