<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $p_list = ['Apple', 'Mango', 'Strawberry', 'Grapes', 'Guava'];
    $q_list = ['This is a fruit that good for you health', 'Patience is bitter, but fruit is sweet', 'Be happy, eat healthy!', 'Balance, peace, and joy are the fruit of a successful life.', 'Good thoughts bear good fruit.'];



    
    return [
        'category'=>$p_list[array_rand($p_list)],
        'description'=>$q_list[array_rand($q_list)],
    ];
});