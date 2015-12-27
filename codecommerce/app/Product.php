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

        return $this->hasMany('CodeCommerce\ProductImage');
    }

    public function category() {

        return $this->belongsTo('CodeCommerce\Category');
    }

}
