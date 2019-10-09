<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Glerk;
use Faker\Generator as Faker;

$factory->define(Glerk::class, function (Faker $faker) {
    return [
        'content' => $faker->sentence(),
        'owner_id' => function() {
            return factory(App\User::class)->create()->id;
        }
    ];
});
