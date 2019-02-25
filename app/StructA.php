<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StructA extends Model
{
    protected $table = 'structA';

    protected $fillable = [
        'name', 'onwer_id'
    ];

    public function structB()
    {
        return $this->belongsTo('App\StructB', 'onwer_id');
    }
}

