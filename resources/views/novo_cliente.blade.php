@extends('template')

@section('titulo')
Cliente - Novo
@endsection

@section('conteudo')
<div class="container">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{route('clientes_novo')}}">             
                            <h2 class="text-center">Cadastro de Clientes</h2>
                            @csrf
                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "nome" class="form-control" placeholder="Nome" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input type = "text" name = "telefone" class="form-control" placeholder="Telefone" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input type = "text" name = "renda" class="form-control" placeholder="Renda" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                         </form>
                </div>
            </div>   
@endsection