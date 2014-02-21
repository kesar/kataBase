<?php

namespace Katas\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $this->assertInstanceOf('Katas\Kata\Kata', new Kata());
    }
}
