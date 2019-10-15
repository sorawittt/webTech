<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->realText(100),
        'detail' => $faker->realText(300),
        'view_count' => $faker->numberBetween(0, 10000)
    ];
});

$factory->state(Post::class, 'popular', function (Faker $faker) {
    return [
        'view_count' =>$faker-> numberBetween(50000, 200000)
    ];
});
