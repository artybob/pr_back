<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Purchase;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Purchase::class, function (Faker $faker) {
    return [
        'title' => $this->faker->name(),
        'specId' => Str::random(10),
    ];
});
