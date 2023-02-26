<?php

namespace Tubes\InventarisBarang\Controller;

class ProductController
{
    function  categories(string $productId, string $categoriId): void{
        echo "ProductId:". $productId. " CategoriId:", $categoriId;
    }
}