<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [ 'id' => 1, 'username' => 'dpaadmin', 'first_name' => 'Admin', 'last_name' => 'DPA', 'display_name' => 'DPA Admin', 'email' => 'admin@dpa.com', 'password' => "11223344Aa!", 'picture' => User::DEFAULT_AVATAR]
        ];
        foreach ($users as $value) {
            $user = User::create($value);
            $user->email_verified_at = Carbon::now();
            $user->roles()->sync([Role::ROLE_ADMIN]);
            $user->save();
        }
    }
}
