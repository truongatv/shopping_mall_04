<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pham Thi Nhai',
            'email'  => 'nhaipham3295@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 1,
        ]);
    }
}
