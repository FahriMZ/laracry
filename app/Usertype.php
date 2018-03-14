<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertype extends Model
{
	protected $primaryKey = 'id_usertype';

    protected $fillable = ['usertype', ];

    public function user() {
    	return $this->hasMany('App\User');
    }
}
