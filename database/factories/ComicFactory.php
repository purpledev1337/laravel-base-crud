<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comic;
use Faker\Generator as Faker;

$factory->define(Comic::class, function (Faker $faker) {
    return [
        
        'title' => $faker -> catchPhrase(),
        'author' => $faker -> name(),
        'release_date' => $faker -> date(),
        'pages' => $faker -> numberBetween(1, 250)
    ];
});
