<?php
namespace Tubes\InventarisBarang;

use PHPUnit\Framework\TestCase;

class regexTest extends TestCase
{
    public function testRegex(){
        $path = "/product/12345/categoris/abcd";

        $pattern = "#^/product/([0-9a-zA-Z]*)/categoris/([0-9a-zA-Z]*)$#";
        $result = preg_match($pattern, $path, $variabels);
        self::assertEquals(1, $result);

        var_dump($variabels);
        array_shift($variabels);
        var_dump($variabels);
    }

}