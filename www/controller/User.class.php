<?php

namespace App\Controller;

use App\Core\User as UserClean;
use App\Core\View;
use App\Model\User as UserModel;

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



        $user = new UserModel();
        $user->setEmail("y.skrzypczyk@gmail.com");
        $user->setPassword("Test1234");
        $user->setLastname("SKrzypCZK   ");
        $user->setFirstname("  YveS");
        $user->generateToken();

        $user->save();


        $view = new View("Register");
    }




}











