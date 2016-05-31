<?php

namespace Questions\Http\Controllers;

use Illuminate\Http\Request;
use Questions\Http\Requests;
use Questions\Http\Controllers\Controller;
use Questions\Prova;
use Questions\Banca;
use Questions\Orgao;
use Questions\Cargo;
use Questions\Ano;
use Questions\Nivel;
use Defender;

class ProvasController extends Controller {

    private $provasModel;

    public function __construct(Prova $provasModel) {
        $this->provasModel = $provasModel;
    }

    public function index() {
                
       
        $provas = $this->provasModel->all();
        return view('provas.index', compact('provas'));
        
    }

    public function create(Banca $banca, Orgao $orgao, Cargo $cargo, Ano $ano, Nivel $nivel) {
       
 
            $bancas = $banca->lists('nome', 'id');
            $orgaos = $orgao->lists('nome', 'id');
            $cargos = $cargo->lists('nome', 'id');
            $nivels = $nivel->lists('nome', 'id');
            $anos = $ano->lists('ano', 'id');

            return view('provas.create', compact('bancas', 'orgaos', 'anos', 'cargos', 'nivels'));
   
    }

    public function store(Request $request) {

        $prova = $this->provasModel;
        // $prova->prova_slug =  str_slug("",'-');
        $prova->banca_id = $request->input('banca_id');
        $prova->cargo_id = $request->input('cargo_id');
        $prova->orgao_id = $request->input('orgao_id');
        $prova->ano_id = $request->input('ano_id');
        $prova->nivel_id = $request->input('nivel_id');
        //dd($request);
        //        $input = $request->all();
        //        
        //        $prova = $this->provasModel->fill($input);
        //        
        $prova->save();

        return redirect()->route('provas');
    }

    public function show($id) {
        
    }

    public function edit($id) {
      
//        $prova = $this->provasModel->find($id);
//        return view('provas.create', compact('prova'));
    }

    public function update(Request $request, $id) {
        
    }

    public function destroy($id) {
        
        $this->provasModel->find($id)->delete();
        return redirect()->route('provas');
    }

}
