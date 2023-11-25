<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
require(__DIR__.'/../../practicals/song.php');
use Practicals\Song;

class SongTest extends TestCase
{

    public function testSetTempo(): void
    {   $track =new Song();
        $track->setTempo(60);
        $this->assertEquals($track->getTempo(),60);
    }
    public function testSetTempoAcceptsIntegerString(): void{
        $track =new Song();
        $track->setTempo("60");
        $this->assertEquals($track->getTempo(),60);
    }
    public function testSetTempoRejectsAlphabetString(): void{
        $track =new Song();
        $this->expectException(\InvalidArgumentException::class);
        $track->setTempo("60 BPM");
    }
    public function testSetTempoRejectsFloat(): void{
        $track =new Song();
        $this->expectException(\InvalidArgumentException::class);
        $track->setTempo(60.5);
    }

}
