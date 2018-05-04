<?php

use Faker\Generator as Faker;
use App\Models\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});
