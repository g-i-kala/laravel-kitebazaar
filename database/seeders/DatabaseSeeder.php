<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserRoleSeeder;
use Illuminate\Support\Facades\Hash;
use Silber\Bouncer\Bouncer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Jane',
            'email' => 'jane@wp.pl',
            'password' => Hash::make(env('USER_PASSWORD'))
        ]);

        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => '5star@wp.pl',
            'password' => Hash::make(env('ADMIN_PASSWORD'))
        ]);


        $this->call(
            UserRoleSeeder::class,
            // other seeders here
        );

        $user->assign('user');
        $admin->assign('admin');

    }
}
