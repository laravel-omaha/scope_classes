<?php

namespace App;

use App\Animal;

class Customer extends User
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(function ($query) {
            $query->where('type', 'customer');
        });
    }

    /**
     * An customer has many Animals
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
