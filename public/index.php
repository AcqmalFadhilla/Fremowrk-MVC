<?php 

require_once __DIR__. "/../vendor/autoload.php";

use Tubes\InventarisBarang\App\Router;
use Tubes\InventarisBarang\Controller\Home;
use Tubes\InventarisBarang\Controller\ProductController;
use Tubes\InventarisBarang\Middelware\AuthMiddelware;

Router::add("GET", "/product/([0-9a-zA-Z]*)/categori/(([0-9a-zA-Z]*))", ProductController::class, "categories");
Router::add("GET", "/", Home::class, "index", [AuthMiddelware::class]);
Router::add("GET", "/login", Home::class, "login");

Router::run();