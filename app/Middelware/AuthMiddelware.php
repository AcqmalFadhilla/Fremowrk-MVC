<?php

namespace Tubes\InventarisBarang\Middelware;

use phpDocumentor\Reflection\Location;

class AuthMiddelware implements Middelware
{
    public function before(): void
    {
        // TODO: Implement before() method.
        session_start();
        if(!isset($_SESSION["user"])){
            header("location: /login");
            exit();
        }
    }
}