<?php

namespace Tubes\InventarisBarang\App;

use phpDocumentor\Reflection\Types\Null_;

class View
{
    public static function Render(string $view, $model = Null){
        require __DIR__ . "/../view/".$view.".php";
    }
}