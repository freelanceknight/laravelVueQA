<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        //
        'title'=> rtrim($faker->sentence(rand(0,10)),'.'),
        'body' => $faker->paragraph(rand(10,20),true),
        'views' => rand(0,10),
        'answers' => rand(0,10),
        'votes' => rand(0,10)

    ];
});
