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

}
