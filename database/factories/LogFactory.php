<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Log::class, function (Faker $faker) {
    return [
        'text' => $faker->text,
    ];
});
