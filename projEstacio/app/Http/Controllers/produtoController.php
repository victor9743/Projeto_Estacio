<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produtos;

class produtoController extends Controller
{
    public function get () {
        $produtos = produtos::all();

        return view("produtos/indexProduto", ['produtos' => $produtos]);
    }
    public function store (Request $produtos) {

        $mConnection = new produtosDao;
        $mConnection->nomeproduto = $produtos->produto;
        $mConnection->dtavalidade = $produtos->validade;
        $mConnection->codbarras = $produtos->codbarras;
        $mConnection->tipoproduto = $produtos->tipo;

        $mConnection->save();
        
        return redirect("/")->with('msg', 'Dados Salvos');
    }
}
