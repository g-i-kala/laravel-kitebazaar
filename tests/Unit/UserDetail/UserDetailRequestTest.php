<?php

namespace Tests\Unit\UserDetail;

use App\Models\UserDetail;
use PHPUnit\Framework\TestCase;

class UserDetailRequestTest extends TestCase
{
    // UserDetail casts test
    public function test_it_casts_social_links_into_array(): void
    {
        $detail = new UserDetail([
          'social_links' => ['https://instagram.com/kokoszka', 'https://facebook.com/kokoszka'],
        ]);

        $this->assertIsArray($detail->social_links);
        $this->assertSame('https://instagram.com/kokoszka', $detail->social_links[0]);
    }
}
