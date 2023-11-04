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
        $this->assertEquals(Practical::add(1,3), 4);
    }
    public function testAddAcceptsFloat(): void
    {
        $this->assertEquals(Practical::add(1.5,3.5), 5);
    }
    public function testAddAcceptsFloatInteger(): void
    {
        $this->assertEquals(Practical::add(1.5,2), 3.5);
    }
    public function testAddAcceptsIntegerString	(): void
    {
        $this->assertEquals(Practical::add("1","2"), 3);
    }
    public function testAddAcceptsFloatString	(): void
    {
        $this->assertEquals(Practical::add("1.4","3.14"), 4.54);
    }

    public function testAddRejectsAlphabetString(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::add("abc","xyz");
    }
    public function testAddRejectsAlphanumericString(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::add("a1","1");
    }

    public function testFibonacciAcceptsInteger(): void{
        $this->assertEquals(Practical::generateFibonacciSequence(4),[0, 1, 1, 2]);

    }
    public function testFibonacciRejectsIntegerString(): void
    {
     $this->expectException(\InvalidArgumentException::class);
     Practical::generateFibonacciSequence("4");
    }
    public function testFibonacciRejectsAlphabetString(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::generateFibonacciSequence("abc");
    }
    public function testFibonacciRejectsFloat(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::generateFibonacciSequence(3.5);
    }


}

?>
