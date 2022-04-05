<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pessoafisica;

class pessoafisicaController extends Controller
{
    protected function index () {
        $pessoasFisicas = pessoafisica::all();

        return view("pessoafisica/indexPessoa", ['pessoasF' => $pessoasFisicas]);
    }
    protected function salvar (Request $pessoa) {

        if (!empty($pessoa->id)) {
            $p = $pessoa->all();
            pessoafisica::findOrFail($p['id'])->update($p);
            
        } else {
            $mConnection = new pessoafisica;

            $mConnection->validadorpessoafisica = $pessoa->valid;
            $mConnection->nome = $pessoa->nome;
            $mConnection->cpf = $pessoa->cpf;
            $mConnection->telefone = $pessoa->telefone;
            $mConnection->save();
        }
        
        return redirect("/pf")->with('msg', 'Dados Salvos');
    }
    protected function mostrar($id) {
        $pessoasFisicas = pessoafisica::findOrFail($id);

        return view('/pessoafisica/newPessoa', ['pessoasF' => $pessoasFisicas]);
    }
    protected function remover($id) {
        pessoafisica::findOrFail($id)->delete();
        return redirect("/pf")->with('msg', 'Dados removidos do com sucesso !!!');

    }
}
