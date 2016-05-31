<?php

namespace Questions\Http\Controllers;

use Illuminate\Http\Request;
use Questions\Http\Requests;
use Questions\Http\Controllers\Controller;
use Questions\Prova;
use Questions\Questao;
use DB;

class QuestoesController extends Controller {

    private $questaoModel;

    public function __construct(Questao $questaoModel) {
        $this->questaoModel = $questaoModel;
    }

    public function index() {
        //
    }

    public function create($id, Prova $prova, Questao $questao) {

        $provas = $prova->find($id);

        $questoes = DB::table('questaos')->where('prova_id', $id)->get(); 
        $alternativa = DB::table('alternativas')->where('prova_id', $id)->get(); 
        
        return view('provas.questoes.create', compact('provas', 'questoes','alternativa'));
    }

    public function store(Request $request) {
        //
    }

    public function show($id) {
        
    }

    public function edit($id_prova) {
        return "Editar a prova $id_prova";
    }

    public function update(Request $request, $id) {
        
    }

    public function destroy($id) {
        
    }

}
