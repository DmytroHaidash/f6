<?php

/* @var $factory Factory */

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug,
        'title' => [

            'en' => ucfirst($faker->words(rand(1, 3), true)),
        ],
        'description' => [
            'en' => $faker->sentence(rand(6, 12)),
        ]
    ];
});
