<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_user = [
            [
                'name' => 'admin',
                'email' => 'yokirahmada@gmail.com',
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'password' => bcrypt('yoki2003'),
                'is_admin' => true,
            ]
            ];

            User::insert($admin_user);

    }
}
