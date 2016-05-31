<?php

namespace Questions;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model {

    public function prova() {

        return $this->hasMany('Questions\Prova');
    }
   
    public function alternativa() {

        return $this->hasMany('Questions\Alternativa');
    }
   
   

}
