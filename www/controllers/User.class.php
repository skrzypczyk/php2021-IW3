<?php
class User {


    public function login()
    {
        echo "test login";
    }

    public function logout()
    {
        echo "Se déconnecter";
    }


    public function register()
    {
        $lastname = "   SKrZYPcZYK";
        //Nettoyage des champs
        $lastname = User::cleanLastname($lastname);
        echo $lastname;

        echo "S'inscrire";
    }




}











