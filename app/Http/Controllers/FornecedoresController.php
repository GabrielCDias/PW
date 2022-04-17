<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedoresController extends Controller
{
    //
    function fornecedores_novo(){
        return view('novo_fornecedor');
    }

    function fornecedores(Request $req){
        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');

        $fornecedor = new Fornecedor();
        $fornecedor ->nome = $nome;
        $fornecedor ->endereco = $endereco;
        $fornecedor ->cep = $cep;
        $fornecedor ->cidade = $cidade;
        $fornecedor ->estado = $estado;

        $fornecedor->save();

        return redirect()->route('fornecedores_listar');
    }

    function fListar(){
        $fornecedores = Fornecedor::all();

        return view('lista_fornecedor', ['fornecedores' => $fornecedores]);
    }

    function fAlterar($id){
        $fornecedor = Fornecedor::findOrFail($id);

        return view('altera_fornecedor', ['fornecedor' => $fornecedor]);
    }

    function fSalvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');

        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor ->nome = $nome;
        $fornecedor ->endereco = $endereco;
        $fornecedor ->cep = $cep;
        $fornecedor ->cidade = $cidade;
        $fornecedor ->estado = $estado;

        $fornecedor->save();

        return redirect()->route('fornecedores_listar');
    }

    function fExcluir($id){
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();

        return redirect()->route('fornecedores_listar');
    }
}
