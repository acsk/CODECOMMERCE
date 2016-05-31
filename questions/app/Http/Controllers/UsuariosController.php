<?php

namespace Questions\Http\Controllers;

use Illuminate\Http\Request;
use Questions\Http\Requests;
use Questions\Http\Controllers\Controller;
use Questions\User;

class UsuariosController extends Controller {

    private $usuariosModel;

    public function __construct(User $usuariosModel) {
        $this->usuariosModel = $usuariosModel;
    }

    public function index() {

        $usuarios = $this->usuariosModel->all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create() {
        return view('');
    }

    public function store(Request $request) {

        $user = $this->usuariosModel;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return "1";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
