<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'beauty',
        ]);

        DB::table('categories')->insert([
            'name' => 'food',
        ]);

        DB::table('categories')->insert([
            'name' => 'fashion',
        ]);

        DB::table('categories')->insert([
            'name' => 'electronic',
        ]);

        DB::table('categories')->insert([
            'name' => 'home',
        ]);

        DB::table('categories')->insert([
            'name' => 'hobby',
        ]);

        DB::table('categories')->insert([
            'name' => 'beauty & cosmetic',
            'category_parent_id' => 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'beauty & men',
            'category_parent_id' => 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'beauty & vitamin',
            'category_parent_id' => 1,
        ]);


        DB::table('categories')->insert([
            'name' => 'food & rice_noodles',
            'category_parent_id' => 2,
        ]);

        DB::table('categories')->insert([
            'name' => 'food & spice_seasoning',
            'category_parent_id' => 2,
        ]);
    }
}

