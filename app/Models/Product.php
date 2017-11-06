<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function getEstadoAttribute($value){
        return ($value = '1') ? 'activo':'inactivo';
    }


}
