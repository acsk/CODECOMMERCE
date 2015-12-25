<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = 
        [
            'name',
            'description',
            'price',
            'recommended',
            'category_id',
            'featured'];

      public function category(){
        
        return $this->belongsTo('CodeCommerce\Category');
    }
}
