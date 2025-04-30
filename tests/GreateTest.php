<?php

use PHPUnit\Framework\TestCase;
use PhpUnitTest\Src\Greate;

final class GreateTest extends TestCase
{
    function testGreate()
    {
        $greate = new Greate();
        $string =  $greate->helloGreate("Mohamed Osama");
        $this->assertEquals("Hello For Registeration Mohamed Osama", $string);
    }
}