<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return factory(App\User::class)->states('employee')->raw();
});
