<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
use App\CarFactory;

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

    public function testUpdateCar()
    {
        $car = Car::inRandomOrder()->first();
        $car->year = '2000';
        $car->save();

        $this->assertContains('2000', $car->year);
    }

    public function testDeleteCar()
    {
        $car = Car::inRandomOrder()->first();
        $car->delete();

        $this->assertTrue(true);
    }

    public function testCountCar()
    {
        $this->artisan("migrate:refresh");
        $this->artisan("db:seed");

        $car = Car::count();

        $this->assertEquals(50, $car);
    }

    public function testYear()
    {
        $car = Car::inRandomOrder()->first();
        $year = (int)$car->year;

        $this->assertInternalType('int', $year);
    }

    public function testModel()
    {
        $car = Car::inRandomOrder()->first();

        $this->assertInternalType('string', $car->model);
    }

}
