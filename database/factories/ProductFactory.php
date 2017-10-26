<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
      "name" => $faker->word(),
      "imgUrl" => "img/product1.png",
      "description" => $faker->paragraphs(rand(5, 8), true)
    ];
});
