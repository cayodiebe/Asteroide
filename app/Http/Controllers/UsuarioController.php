<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
      public function index() {
        $Usuarios = Usuario::all();
        $total = Usuario::all()->count();
        return view('list-Usuarios', compact('Usuarios', 'total'));
    }

    public function create() {
        return view('include-Usuario');
    }

    public function store(Request $request) {
        $usuario = new Usuario;
        $usuario->Nome = $request->Nome;
        $usuario->Sobrenome = $request->Sobrenome;
        $usuario->Email = $request->Email;
        $usuario->Data_De_Nascimento = $request->Data_De_Nascimento;
        $usuario->save();
        return redirect()->route('usuario.index')->with('message', 'Usuario criado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $usuario = Usuario::findOrFail($id);
        return view('alter-Usuario', compact('usuario'));
    }

    public function update(Request $request, $id) {
        $usuario = Usuario::findOrFail($id); 
        $usuario->Nome = $request->Nome;
        $usuario->Sobrenome = $request->Sobrenome;
        $usuario->Email = $request->Email;
        $usuario->Data_De_Nascimento = $request->Data_De_Nascimento;
        $usuario->save();
        return redirect()->route('usuario.index')->with('message', 'Usuario alterado com sucesso!');
    }

    public function destroy($id) {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuario.index')->with('message', 'Usuario excluído com sucesso!');
    }

}
