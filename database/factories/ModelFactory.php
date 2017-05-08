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
$factory->define(YoungLife\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'firstname' => $faker->name,
        'lastname' => $faker->lastname,
        'username' => $faker->unique()->username,
        'email' => $faker->unique()->safeEmail,
        'usertype_id'=>function(array $usertype){
            return Younglife\Usertype::find($usertype['id'])->usertype_id
        }
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
 // $table->increments('id');
//             $table->string('firstname');
//             $table->string('lastname');
//             $table->string('gender');
//             $table->string('username')->unique();
//             $table->string('email');
//             $table->integer('usertype_id')->unsigned();
//             $table->foreign('usertype_id')->references('id')->on('usertypes');
//             $table->string('password');
//             $table->rememberToken();
//             $table->timestamps();