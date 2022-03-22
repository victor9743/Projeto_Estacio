<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produtos;

class produtoController extends Controller
{
    protected function get () {
        $produtos = produtos::all();

        return view("produtos/indexProduto", ['produtos' => $produtos]);
    }
    protected function store (Request $produtos) {

        $mConnection = new produtos;
        $produto ='';
        $produto = produtos::find($produtos->id_produto);

        if (!empty($produto)) {
            $update = $produto->all();
            issue::findOrFail($produtos->idProduto)->update($update);
        } else {
            $mConnection->nomeproduto = $produtos->produto;
            $mConnection->dtavalidade = $produtos->validade;
            $mConnection->codbarras = $produtos->codbarras;
            $mConnection->tipoproduto = $produtos->tipo;
        }
        

        $mConnection->save();
        
        return redirect("/produtos")->with('msg', 'Dados Salvos');
    }
    protected function remove($id) {
        produtos::findOrFail($id)->delete();
        return redirect("/")->with('msg', 'Dados removidos do com sucesso !!!');

    }
}
