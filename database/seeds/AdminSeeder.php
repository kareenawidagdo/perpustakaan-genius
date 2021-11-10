<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'Admin',
            'email' => 'admin@genius.com',
            'password' => bcrypt('admin123'),
            'token' => Str::random(50),
            'photo' => 'default-profile.png',
            'account_status' => '1'
        ];
        
        User::insert($admin);
    }
}
