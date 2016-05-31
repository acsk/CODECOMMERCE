<?php

namespace Questions;

use Illuminate\Database\Eloquent\Model;

class Orgao extends Model {

    protected $fillable = ['descricao', 'nome'];

    public function provas() {

        return $this->hasMany('Questions\Prova');
    }

}
