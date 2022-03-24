<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produtos;

class produtoController extends Controller
{
    protected function index () {
        $produtos = produtos::all();

        return view("produtos/indexProduto", ['produtos' => $produtos]);
    }
    protected function salvar (Request $produto) {

        if (!empty($produto->id)) {
            $p = $produto->all();
            produtos::findOrFail($p['id'])->update($p);
            
        } else {
            $mConnection = new produtos;

            $mConnection->nomeproduto = $produto->nomeproduto;
            $mConnection->dtavalidade = $produto->dtavalidade;
            $mConnection->codbarras = $produto->codbarras;
            $mConnection->tipoproduto = $produto->tipoproduto;
            $mConnection->save();
        }
        
        return redirect("/produtos")->with('msg', 'Dados Salvos');
    }
    protected function mostrar($id) {
        $produto = produtos::findOrFail($id);

        return view('/produtos/newProduto', ['produto' => $produto]);
    }
    protected function remover($id) {
        produtos::findOrFail($id)->delete();
        return redirect("/produtos")->with('msg', 'Dados removidos do com sucesso !!!');

    }
}
