<?php
namespace SimpleIT\Foobar\Test;

use SimpleIT\Foobar\Foo;

class FooTest extends \PHPUnit_Framework_TestCase
{

    private $foo;

    public function setUp()
    {
            $this->foo = new Foo();
    }

    public function testSayBar()
    {
             $this->assertEquals('Bar', $this->foo->sayBar());
    }
}
