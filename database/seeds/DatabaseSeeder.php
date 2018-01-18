<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Employee::class, 3)->create();

        factory(\App\Customer::class, 20)
            ->create()
            ->each(function($customer) {
                factory(\App\Animal::class, rand(1,3))
                    ->create([
                        'customer_id' => $customer->id,
                        'employee_id' => \App\Employee::all()->random()->id,
                    ]);
            });
    }
}
