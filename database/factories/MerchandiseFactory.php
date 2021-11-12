<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Merchandise;
use Faker\Generator as Faker;

$factory->define(Merchandise::class, function (Faker $faker) {
    $a_list = ['Asus', 'Asus ROG-Phone', 'Intel', 'Adhads', 'Razor'];
    $b_list = ['Asus Tuf', 'Asus TUF Gaming F15', 'Strix', 'Zephryus', 'Chromebook'];

    return [
        'brand_name'=>$a_list[array_rand($a_list)],
        'product_name'=>$b_list[array_rand($b_list)],
        'category_id'=> rand(1, 5),
        'retail_price'=> rand(2, 500),
        'wholesale_price'=> rand(22, 850),
        'unit_id'=> rand(1, 5),
        'wholesale_qty'=> rand(6, 50),
        'qty_stock'=> rand(10, 50),
    ];
});