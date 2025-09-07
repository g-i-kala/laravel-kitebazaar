<?php

namespace Tests\Unit\Auth;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthUnitTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_fails_with_wrong_credentials(): void
    {
        $user = User::factory()->create([
            'password' => bcrypt('secret-pass'),
        ]);

        $succes = Auth::attempt([
            'email' => $user->email,
            'password' => 'wrong-pass',
        ]);

        $this->assertFalse($succes);
        $this->assertGuest();
    }
}
