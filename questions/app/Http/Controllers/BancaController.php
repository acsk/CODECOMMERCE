<?php

namespace Questions\Http\Controllers;

use Illuminate\Http\Request;
use Questions\Http\Controllers\Controller;
use Questions\Http\Requests\BancaRequest;
use Questions\Banca;
use Defender;

class BancaController extends Controller {

    private $bancasModel;

    public function __construct(Banca $bancaModel) {
        $this->bancasModel = $bancaModel;
    }

    public function index() {
        $bancas = $this->bancasModel->all();
        return view('bancas.index', compact('bancas'));
    }

    public function create() {
        
        return view('bancas.create');
        
    }

    public function store(BancaRequest $request) {

        $input = $request->all();

        $banca = $this->bancasModel->fill($input);

        $banca->save();

        return redirect()->route('bancas');
    }

    public function show($id) {
        //
    }

    public function edit($id) {

        $banca = $this->bancasModel->find($id);
        return view('bancas.edit', compact('banca'));
    }

    public function update(BancaRequest $request, $id) {
        
        $this->bancasModel->find($id)->update($request->all());
         
        return redirect()->route('bancas');
    }

    public function destroy($id) {

        $this->bancasModel->find($id)->delete();
        return redirect()->route('bancas');
    }

}
