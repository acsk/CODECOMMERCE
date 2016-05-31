<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = [
        'name',
        'description',
        'price',
        'recommended',
        'category_id',
        'featured'
    ];

    public function images() {
    
        // produtos tem muitas imagens
        return $this->hasMany('CodeCommerce\ProductImage');
    }

    public function category() {

        //produto tem apenas uma categorua
        return $this->belongsTo('CodeCommerce\Category');
    }

}
