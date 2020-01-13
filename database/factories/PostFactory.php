<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $tags = collect(['php', 'ruby', 'java', 'javascript', 'bash'])
        ->random(2)
        ->values()
        ->all();

    return [
        'title' => $faker->sentence(),
        'body' => $faker->text(),
        'tags' => $tags,
    ];
});
