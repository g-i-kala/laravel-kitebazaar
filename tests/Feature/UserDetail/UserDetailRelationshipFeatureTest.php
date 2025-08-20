<?php

namespace Tests\Feature\UserDetail;

use App\Models\User;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase as TestsTestCase;

class UserDetailRelationshipFeatureTest extends TestsTestCase
{
    use RefreshDatabase;

    public function test_it_belongs_to_a_user(): void
    {
        $user = User::factory()->create();
        $detail = $user->detail;

        $this->assertInstanceOf(User::class, $detail->user);
        $this->assertSame($user->id, $detail->user->id);
    }
}
