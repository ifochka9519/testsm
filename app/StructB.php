<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StructB extends Model
{
    protected $table = 'structB';

    protected $fillable = [
        'field_1'
    ];

    public function structsA()
    {
        return $this->hasMany('App\StructA', 'onwer_id');
    }
}
