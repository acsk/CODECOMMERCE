<?php

namespace Questions;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model
{
    public function prova(){
        
        return $this->hasMany('Questions\Prova');
        
    }
}
