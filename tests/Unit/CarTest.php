<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCar()
    {
        factory(Car::class, 1)->create()->each(function ($car) {
            //$u->posts()->save(factory(App\Post::class)->make());
        });

        $this->assertTrue(true);
    }
}
