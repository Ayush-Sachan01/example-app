<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require(__DIR__.'/../../practicals/Practical.php');
use \Practical;

class PracticalTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdd(): void
    {
        $this->assertEquals(Practical::add(1.5,3), 4.5);
    }
    public function testAddNumeric(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::add("acbsdd","sadlv");
    }
}

?>
