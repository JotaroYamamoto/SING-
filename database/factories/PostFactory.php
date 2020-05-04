<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title'=>'yesterday',
        'composer'=>'the beatles',
        'lyrics'=>'yesterday',
        'user_id'=>1,
        'point'=>'yesterday',
    ];
});
