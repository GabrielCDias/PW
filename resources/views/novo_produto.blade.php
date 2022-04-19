@extends('template')

@section('titulo')
Produto - Novo
@endsection

@section('conteudo')
<div class="container">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{route('produtos_novo')}}">             
                            <h2 class="text-center">Cadastro de Produtos</h2>
                            @csrf
                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "nome" class="form-control" placeholder="Nome" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input type = "text" name = "quantidade" class="form-control" placeholder="Quantidade" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input type = "text" name = "preco" class="form-control" placeholder="Preço" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <input type = "text" name = "id_fornecedor" class="form-control" placeholder="ID Fornecedor" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                         </form>
                </div>
            </div>
@endsection