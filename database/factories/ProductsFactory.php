<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->name(),
        'detail_1' => $faker->text(),
        
        'price' => $faker->unique()->numberBetween(200,600),

        'instock' => $faker->unique()->numberBetween(0,100),
        'add_product' => $faker->unique()->numberBetween(0,100),
        'created_at' => $faker->dateTime($max='now'),
        'updated_at' => $faker->dateTime($max='now')
    ];
});
