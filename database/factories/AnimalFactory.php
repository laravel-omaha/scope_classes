<?php

use Faker\Generator as Faker;

$factory->define(App\Animal::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'type' => $faker->randomElement(['cat', 'dog', 'turtle']),
        'age'  => $faker->numberBetween(1, 15),
        'customer_id' => function() {
            return factory(App\Customer::class)->create()->id;
        },
        'employee_id' => function() {
            return factory(App\Employee::class)->create()->id;
        },
    ];
});
