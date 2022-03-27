<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    //

    function produtos_novo(){
        return view('novo_produto');
    }

    function produtos(Request $req){
        
        $nome = $req->input('nome');
        $quantidade= $req->input('quantidade');
        $preco = $req->input('preco');

        $produto = new Produto();
        $produto->nome = $nome;
        $produto->quantidade = $quantidade;
        $produto->preco = $preco;

        $produto->save();

        return redirect()->route('produtos_listar');
    }

    function plistar(){
        $produtos = Produto::all();
        return view('lista_produto',['produtos' => $produtos]);
    }
}
