<?php

use Illuminate\Database\Seeder;
use App\Models\ShopProduct;
class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\ShopProduct::class,20)->create();
    }
}
