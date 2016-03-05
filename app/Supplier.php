<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
	protected $fillable = ['nome', 'email', 'cnpj', 'estado'];

    public function products(){
    	return $this->hasMany(Product::class);
    }

    public function addProduct(Product $prod){

    	return $this->products()->save($prod);
    }
}
