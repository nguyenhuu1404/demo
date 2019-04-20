<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    use WithFaker;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample() {
        $this->assertTrue(true);
    }

    public function testCanCreateUser() {
        $data = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10)
        ];
        $response = $this->post(route('admin.user.store'), $data);
        $response->assertStatus(302);
        $this->get(route('admin.user.index'))
            ->assertStatus(200);
    }
    public function testCanUpdateUser() {
        $user = factory(User::class)->create();
        $data = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10)
        ];
        $this->put(route('admin.user.update', $user->id), $data)
            ->assertStatus(302);
        $this->get(route('admin.user.index'))
            ->assertStatus(200);
    }
    public function testCanShowUser() {
        $user = factory(User::class)->create();
        $this->get(route('admin.user.show', $user->id))
            ->assertStatus(200);
    }
    public function testCanDeleteUser() {
        $user = factory(User::class)->create();
        $this->delete(route('admin.user.delete', $user->id))
            ->assertStatus(302);
        $this->get(route('admin.user.index'))
            ->assertStatus(200);
    }
    public function testCanListUsers() {
        $users = factory(User::class, 2)->create()->map(function ($user) {
            return $user->only(['id', 'name', 'email', 'password']);
        });
        $this->get(route('admin.user.index'))
            ->assertStatus(200);
    }
}
