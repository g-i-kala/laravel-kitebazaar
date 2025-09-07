<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register(): void
    {
        $response = $this->post('/register', [
            'name' => 'Test Name',
            'surname' => 'Test Surname',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('dashboard', absolute: false));
    }

    public function test_proper_input_validation(): void
    {
        //$this->expectExceptionMessageMatches('The name field is required.');
        $response = $this->post('/register', [
            'surname' => 'Test Surname',
            'email' => 'testexample.com',
            'password' => 'passwor',
            'password_confirmation' => 'passwot',
        ]);

        $response->assertSessionHasErrors(['name']);
        $response->assertSessionHasErrors(['email']);
        $response->assertSessionHasErrors(['password']);
    }
}
