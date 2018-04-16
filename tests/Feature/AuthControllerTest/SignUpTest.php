<?php

namespace Tests\Feature;

use Tests\TestCase;

class SignUpTest extends TestCase
{
    /**
     * @test
     */
    public function success()
    {
        $response = $this->postJson(route('auth.sign-up'), [
            'email' => 'test@test.com',
            'password' => '12345',
            'password_confirmation' => '12345',
        ])
        ->assertSuccessful();

        $user = User::whereEmail('test@test.com')->first();
        $this->assertNotNull($user);
        $this->assertEquals($user->id, $response->json('data.user.id'));
    }


    public function validation()
    {

    }
}