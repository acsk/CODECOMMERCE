<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = 
        [
            'name',
            'description'
            ];
}
