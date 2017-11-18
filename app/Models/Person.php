<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    public function persontypes(){
    	return $this->hasMany(PersonType::class);
    }

    public function users(){
    	return $this->hasMany(User::class);
    }

    public function purchases(){
    	return $this->hasMany(Purchase::class);
    }

    public function sales(){
    	return $this->hasMany(Sale::class);
    }
}
