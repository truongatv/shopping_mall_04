<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Models\Category::class, function($faker){
    $name = $faker->unique()->word;
    $id = rand(1,10);

    return[
        'name' => $name,
        'category_parent_id' => $id
    ];
});
$factory->define(App\Models\ShopProduct::class, function($faker){
    $name = $faker->unique()->word;
    $link = $faker->unique()->word;
    $intro = $faker->unique()->word;

    return[
        'shop_product_name' => $name,
        'avata_image_link' => $link,
        'introdution' => $intro
    ];
});
$factory->define(App\Models\Product::class, function($faker){
    $name = $faker->unique()->word.' '.$faker->unique()->word;
    $rate_count = rand(0,5);
    $unit_price = 10000;
    $total_quanity = 1000;
    $top_product = 1000;
    $category_id = rand(1,20);
    $shop_product_id = rand(1,20);

    return [
        'name' => $name,
        'rate_count' => $rate_count,
        'unit_price' => $unit_price,
        'total_quanity' => $total_quanity,
        'top_product' => $top_product,
        'category_id' => $category_id,
        'shop_product_id' => $shop_product_id

    ];
});
$factory->define(App\Models\Image::class, function($faker){
    $link = 'https://parts.ippin.com/resized_images/shops/43/28d4ee6c49a9c0785b2a15b059e17c10.png';
    $product_id = rand(1,20);

    return [
        'link' => $link,
        'product_id' => $product_id
    ];

});
$factory->define(App\Models\Order::class, function($faker){
    $content = $faker->unique()->word;
    $status = rand(1,2);
    $total_price = 500000;
    $user_id = rand(1,5);
    $payment_id = rand(1,10);

    return [
        'content' => $content,
        'status' => $status,
        'total_price' => $total_price,
        'user_id' => $user_id,
        'payment_id' => $payment_id

    ];
});
$factory->define(App\Models\OrderDetail::class, function($faker){
    $content = $faker->unique()->word;
    $quality = rand(0,10);
    $unit_price = 10000;
    $order_id = rand(1,10);
    $product_id = rand(1,20);

    return [
        'content' => $content,
        'quality' => $quality,
        'unit_price' => $unit_price,
        'order_id' => $order_id,
        'product_id' => $product_id
    ];
});
$factory->define(App\Models\Payment::class, function($faker){
    $payment_type_id = rand(0,3);
        return [
        'payment_type_id' => $payment_type_id
    ];
});

$factory->define(App\Models\Product::class,function($faker){
	$name = $faker->unique()->word.' '.$faker->unique()->word;
	$rate_count = rand(0,5);
	$unit_price = 10000;
	$total_quanity = 1000;
	$top_product = 1000;
	$category_id = rand(1,100);
	$shop_product_id = rand(1,100);
	$information = ('Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci.

		Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci
		ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non.
		Suspendisse potenti. Pellentesque non accumsan orci.');

	return [
	    'name'=>$name,
	    'rate_count' => $rate_count,
	    'unit_price' => $unit_price,
	    'total_quanity' => $total_quanity,
	    'top_product' => $top_product,
	    'category_id' => $category_id,
	    'shop_product_id'=> $shop_product_id,
	    'information'=> $information
        ];
});

$factory->define(App\Models\PaymentType::class, function($faker){
    $information = $faker->unique()->word;
        return [
        'information' => $information
    ];
});

$factory->define(App\Models\Image::class,function($faker){
	$link = 'https://parts.ippin.com/resized_images/shops/43/28d4ee6c49a9c0785b2a15b059e17c10.png';
	$product_id = rand(1,20);

	return [
		'link' => $link,
		'product_id'=>$product_id
	];
});
