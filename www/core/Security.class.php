<?php

class Security
{

    public static function checkRoute($route):bool
    {
        /*
         * /dashboard:
              controller: admin
              action: home
              security: true
         *
         */
        return true;
    }


}