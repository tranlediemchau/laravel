<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public $timestamps = false;
	protected  $fillable= [
			'name',
			'price1',
			'price2',
			'discription'
	];
	public function type(){
		return $this->belongsTo('App\typemarchandie');
	}
}
