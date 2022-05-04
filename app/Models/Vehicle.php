<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    //..eager loading is not recommended 
    //protected $with = ['rentals'];

    public function rentals(){
        return $this->hasMany(Rental::class);
    }

}
