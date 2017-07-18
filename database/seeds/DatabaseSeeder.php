<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(CategorySeeder::class);
        $this->call(ShopSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ImageSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
