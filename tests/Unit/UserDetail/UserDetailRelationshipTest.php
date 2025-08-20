<?php

namespace Tests\Unit\UserDetail;

use App\Models\User;
use App\Models\UserDetail;
use PHPUnit\Framework\TestCase;

class UserDetailRelationshipTest extends TestCase
{
    public function test_it_belongs_to_a_user(): void
    {
        $user = new User(['id' => 1]);
        $detail = new UserDetail(['user_id' => $user->id]);

        $detail->setRelation('user', $user);
        $this->assertSame($detail->user, $user);
    }
}
