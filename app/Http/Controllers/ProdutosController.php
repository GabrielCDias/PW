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
        $id_fornecedor = $req->input('id_fornecedor');

        $produto = new Produto();
        $produto->nome = $nome;
        $produto->quantidade = $quantidade;
        $produto->preco = $preco;
        $produto->id_fornecedor = $id_fornecedor;

        $produto->save();

        return redirect()->route('produtos_listar');
    }

    function pListar(){
        $produtos = Produto::all();
        return view('lista_produto',['produtos' => $produtos]);
    }

    function produtos_fornecedor($id_fornecedor){
        $produtos = Produto::findOrFail($id_fornecedor);

        return view('lista_produtos_fornecedor', ['produtos' => $produtos]);
    }

    function pAlterar($id){
        $produto = Produto::findOrFail($id);

        return view('altera_produto', ['produto' => $produto]);
    }

    function pSalvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $quantidade = $req->input('quantidade');
        $preco = $req->input('preco');

        $produto = Produto::findOrFail($id);
        $produto->nome = $nome;
        $produto->quantidade = $quantidade;
        $produto->preco = $preco;

        $produto->save();

        return redirect()->route('produtos_listar');
    }

    function pExcluir($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos_listar');
    }
}
