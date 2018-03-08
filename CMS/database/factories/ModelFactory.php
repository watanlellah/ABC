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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'role' => $faker->word,
        'password' => bcrypt(str_random(10)),
        'image' =>$faker->imageUrl($width = 640, $height = 480),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\FromDr::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'has_cache' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = NULL),
        'withdrawn' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = NULL),
        'net_cache' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = NULL),
        'user_id' => $faker->numberBetween($min = 1, $max = 100),

    ];
});
$factory->define(App\Order::class, function (Faker\Generator $faker) {
    return [
        'state' => $faker->boolean,
        'cache_in' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = NULL),
        'payment' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = NULL),
        'Change' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = NULL),
        'patient_id' => $faker->numberBetween($min = 1, $max = 1000),
    ];
});
$factory->define(App\Patient::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'national_id' => $faker->numberBetween($min = 1000005, $max = 1000000000),
        'address' => $faker-> text($maxNbChars = 200),
        'birth_date' =>$faker->date($format = 'Y-m-d', $max = 'now'),
        'mobile_no' =>$faker-> text($maxNbChars = 200),
        'dr_in' =>$faker->name,
        'diagnose' =>$faker-> text($maxNbChars = 200),
        'report' =>$faker-> text($maxNbChars = 200),
        'status' =>$faker->boolean,
        'image' =>$faker->imageUrl($width = 640, $height = 480),

    ];
});
$factory->define(App\Subscryption::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'fee' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = NULL),
        'user_id' => $faker->numberBetween($min = 1, $max = 100),
        'patient_id' => $faker->numberBetween($min = 1, $max = 1000),
    ];
});
$factory->define(App\UserPatient::class, function (Faker\Generator $faker) {
    return [
        'diagnose' => $faker->name,
        'report' => $faker->name,
        'user_id' => $faker->numberBetween($min = 1, $max = 100),
        'patient_id' => $faker->numberBetween($min = 1, $max = 1000),
    ];
});

$factory->define(App\PatientSubscryption::class, function (Faker\Generator $faker) {
    return [

        'patient_id' => $faker->numberBetween($min = 1, $max = 1000),
        'subscryption_id' => $faker->numberBetween($min = 1, $max = 1000),
    ];
});

$factory->define(App\OrderSubscryption::class, function (Faker\Generator $faker) {
    return [

        'order_id' => $faker->numberBetween($min = 1, $max = 100),
        'subscryption_id' => $faker->numberBetween($min = 1, $max = 100),
    ];
});
$factory->define(App\PatientSubscryption::class, function (Faker\Generator $faker) {
    return [

        'patient_id' => $faker->numberBetween($min = 1, $max = 100),
        'subscryption_id' => $faker->numberBetween($min = 1, $max = 100),
    ];
});
$factory->define(App\OrderUser::class, function (Faker\Generator $faker) {
    return [
        'report' =>$faker-> text($maxNbChars = 200),
        'order_id' => $faker->numberBetween($min = 1, $max = 1000),
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
