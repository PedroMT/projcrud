<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['nome', 'quantidade', 'valor', 'descricao', 'id_fornecedor'];

    public function supplier(){
    	return $this->belongsTo(Supplier::class);
    }
}
