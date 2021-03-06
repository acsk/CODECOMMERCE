<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model {

    protected $fillable = [

        'produt_id',
        'extension',
       'image'
    ];

    public function product(){
        
        return $this->belongsTo('CodeCommerce\Product');
        
    }
}
