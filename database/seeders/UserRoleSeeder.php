<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Bouncer;

class UserRoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Roles
        Bouncer::role()->firstOrCreate([
            'name' => 'admin',
            'title' => 'Administrator'
        ]);
        Bouncer::role()->firstOrCreate([
            'name' => 'user',
            'title' => 'Regular User'
        ]);

        // Abilities
        Bouncer::ability()->firstOrCreate(['name' => 'view-gear']);
        Bouncer::ability()->firstOrCreate(['name' => 'create-gear']);
        Bouncer::ability()->firstOrCreate(['name' => 'contact-seller']);

        // Assign abilities
        Bouncer::allow('user')->to(['view-gear', 'create-gear', 'contact-seller']);
        Bouncer::allow('user')->toOwnEverything();
        Bouncer::allow('admin')->everything();
    }
}
