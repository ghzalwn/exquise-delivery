<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => 'admin',
            'username' => 'admin',
            'user_type' => 'admin',
            'active' => 'Y',
            'password' => bcrypt('admin'),
        ]);
    }
}
