<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUser()
    {

        factory(User::class, 1)->create()->each(function ($u) {
            //$u->posts()->save(factory(App\Post::class)->make());
        });

        $this->assertTrue(true);
    }

    public function testUpdate()
    {
        $user = User::inRandomOrder()->first();
        $user->name = 'Steve Smith';
        $user->save();

        $this->assertContains('Steve Smith', $user->name);
    }

    public function testDelete()
    {
        $user = User::inRandomOrder()->first();
        $user->delete();

        $this->assertTrue(true);
    }

    public function testCount()
    {
        $this->artisan("migrate:refresh");
        $this->artisan("db:seed");

        $user = User::count();

        $this->assertEquals(50, $user);
    }

}
