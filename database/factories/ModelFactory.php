<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Models\Post::class, function (\Faker\Generator $faker) {
    return [
        'slug' => $faker->slug(),
        'post_type_id' => 4,
        'status' => 'publish',
        'publish_at' => date('Y-m-d'),
        'created_by' => 1,
        'created_by_name' => 'pashamahardika'
    ];
});

$factory->define(\App\Models\PostTranslation::class, function (\Faker\Generator $faker) {
    return [
        'post_id' => function () {
            return factory(\App\Models\Post::class)->create()->id;
        },
        'locale' => 'en',
        'title' => $faker->sentence,
        'content' => $faker->paragraphs(5, true),
        'excerpt' => $faker->paragraph,
    ];
});

$factory->define(\App\Models\PostMeta::class, function (\Faker\Generator $faker) {
    return [
        'post_id' => function () {
            return factory(\App\Models\PostTranslation::class)->create()->post_id;
        },
        'meta_key' => 'event_date'
    ];
});

$factory->define(\App\Models\PostMetaTranslation::class, function (\Faker\Generator $faker) {
    $eventDate = $faker->dateTimeBetween('now', '+5 months')->format('Y-m-d');
    return [
        'post_meta_id' => function () {
            return factory(\App\Models\PostMeta::class)->create()->id;
        },
        'locale' => 'en',
        'value' => $eventDate
    ];
});