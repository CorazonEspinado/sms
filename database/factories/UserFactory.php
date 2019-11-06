<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $faker=\Faker\Factory::create('lv_LV');
    return [
        'login' => $faker->userName,
        'email' => $faker->unique()->email,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->defineAs(App\Models\Group::class, 'admin', function (Faker $faker) {
    $faker=\Faker\Factory::create('lv_LV');
    return [
        'name' =>'Group 1',
        'slug' => 'group_1',
        'description' =>$faker->realText(20),
    ];
});

$factory->defineAs(App\User::class, 'admin', function (Faker $faker) {
    $faker=\Faker\Factory::create('lv_LV');
    return [
        'login' => $faker->userName,
        'email' => $faker->unique()->email,
        'email_verified_at' => now(),
        'password' => bcrypt('123456'),
        'isActive' => $faker->boolean,
        'remember_token' => Str::random(10),
    ];
});
$factory->defineAs(App\Models\Role::class, 'admin', function (Faker $faker) {
    $faker=\Faker\Factory::create('lv_LV');
    return [
        'name' =>'Администратор',
        'slug' => 'admin',
        'description' =>$faker->realText(20),
    ];
});

$factory->defineAs(App\Models\Profile::class, 'admin', function (Faker $faker) {
    $faker=\Faker\Factory::create('lv_LV');
    return [
        'name' => $faker->firstName,
        'surname'=>$faker->lastName,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,

    ];
});
$factory->defineAs(App\Models\Group::class, 'admin', function (Faker $faker) {
    $faker=\Faker\Factory::create('lv_LV');
    return [
        'name' =>'Group 1',
        'slug' => 'group_1',
        'description' =>$faker->realText(20),
    ];
});
$factory->defineAs(App\User::class, 'manager', function (Faker $faker) {
    $faker=\Faker\Factory::create('lv_LV');
    return [
        'login' => $faker->userName,
        'email' => $faker->unique()->email,
        'email_verified_at' => now(),
        'password' => bcrypt('123456'),
        'isActive' => $faker->boolean,
        'remember_token' => Str::random(10),

    ];
});
$factory->defineAs(App\Models\Role::class, 'manager', function (Faker $faker) {
    $faker=\Faker\Factory::create('lv_LV');
    return [
        'name' =>'Manager',
        'slug' => 'manager',
        'description' =>$faker->realText(20),
    ];
});
$factory->defineAs(App\Models\Group::class, 'manager', function (Faker $faker) {
    $faker=\Faker\Factory::create('lv_LV');
    return [
        'name' =>'Group 2',
        'slug' => 'group_2',
        'description' =>$faker->realText(20),
    ];
});

$factory->defineAs(App\Models\Profile::class, 'manager', function (Faker $faker) {
    $faker=\Faker\Factory::create('lv_LV');
    return [
        'name' => $faker->firstName,
        'surname'=>$faker->lastName,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
    ];
});
