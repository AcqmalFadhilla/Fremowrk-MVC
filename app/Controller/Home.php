<?php
namespace Tubes\InventarisBarang\Controller;

use Tubes\InventarisBarang\App\View;

class Home{
    function index(): void{
        $model = [
            "title" => "Home",
            "text" => "ini index"
        ];

       View::Render("Home/index", $model);
    }

    function login(): void{
       View::Render("Home/login" );
    }
}