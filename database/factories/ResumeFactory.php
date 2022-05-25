<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Resume;
use Faker\Generator as Faker;

$factory->define(Resume::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'employment_type' => serialize([$faker->word]),
        'employment_position' => serialize([$faker->word]),
        'additional_info' => $faker->paragraph,
        'resume_path' => $faker->url
    ];
});
