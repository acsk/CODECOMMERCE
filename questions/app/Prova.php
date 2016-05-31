<?php

namespace Questions;

use Illuminate\Database\Eloquent\Model;

class Prova extends Model {

    protected $guarded = ['id'];
    
    public function ano() {

        return $this->belongsTo('Questions\Ano');
    }

    public function cargo() {

        return $this->belongsTo('Questions\Cargo');
    }

    public function orgao() {

        return $this->belongsTo('Questions\Orgao');
    }

    public function banca() {

        return $this->belongsTo('Questions\Banca');
    }
    public function nivel() {

        return $this->belongsTo('Questions\Nivel');
    }
    
    public function questao() {

        return $this->belongsTo('Questions\Questao');
    }
    
  

}
