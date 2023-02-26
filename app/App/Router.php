<?php

namespace Tubes\InventarisBarang\App;

class Router{
    private static array $routes = [];

    #mapping url
    public static function add(string $method,
                               string $path,
                               string $controller,
                               string $function,
                               array  $middelwares = []): void
    {
        self::$routes[] =[
            "method" => $method,
            "path" => $path,
            "controller" => $controller,
            "function" => $function,
            "middelwares" => $middelwares
        ];
    }

    #menjalankan router
    public static function run(): void 
    {
        $path = '/';
        if(isset($_SERVER["PATH_INFO"])){
            $path = $_SERVER["PATH_INFO"];
        }

        $method = $_SERVER["REQUEST_METHOD"];

        foreach (self::$routes as $route){
            $pattern= "#^".$route['path']."$#";
            if(preg_match($pattern, $path, $variabels) && $route["method"] == $method){

                // middelwares
                foreach ($route["middelwares"] as $middelware){
                    $instance = new $middelware;
                    $instance->before();
                }

                $function = $route['function'];
                $controller = new $route["controller"];
                
//                $controller->$function();
                array_shift($variabels);
                call_user_func_array([$controller, $function], $variabels);
                return;
            }
        }

        http_response_code(404);
        echo "CONTROLLER NOT FOUND";
    }
}