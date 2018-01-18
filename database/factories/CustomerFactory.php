<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return factory(App\User::class)->states('customer')->raw();
});
