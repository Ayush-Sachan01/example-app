<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class   BaiganTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testBaiganOK(): void
    {
        $response = $this->get('/veggies/baigan');

        $response->assertStatus(200);
    }
    public function testVeggiesOK(): void
    {
        $response = $this->get('/veggies/bhindi');

        $response->assertStatus(200);
    }
    public function testVeggiesSeeAalooGobhi(): void
    {
        $response = $this->get('/veggies/aaloo');

        $response->assertSee("aaloo");

        $response = $this->get('/veggies/gobhi');

        $response->assertSee("gobhi");
    }
    public function testVeggiesAdrakLassan(): void
    {
        $response = $this->get('/veggies/baigan');
        $response->assertSee("baigan");

        $response = $this->get('/veggies/bhindi');
        $response->assertSee("bhindi");

        $response = $this->get('/veggies/aaloo');
        $response->assertSee("aaloo");

        $response = $this->get('/veggies/gobhi');
        $response->assertSee("gobhi");

        // Reject pyaaz adrak lassan xkjbcjhbvxcj
        $response = $this->get('/veggies/pyaaz');
        $response->assertStatus(404);

        $response = $this->get('/veggies/adrak');
        $response->assertStatus(404);

        $response = $this->get('/veggies/lassan');
        $response->assertStatus(404);

        $response = $this->get('/veggies/jvhjvsdfsfvsj');
        $response->assertStatus(404);

    }
    public function testVeggiesSeeAll(): void
    {
        $response = $this->get('/veggies');

        $response->assertStatus(200);

        $response->assertSee('Baigan');
        $response->assertSee('Bhindi');
        $response->assertSee('Aaloo');
        $response->assertSee('Gobhi');
    }
}
?>
