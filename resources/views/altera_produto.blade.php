@extends('template')

@section('titulo')
Alterar produto - #{{ $produto->id }}
@endsection

@section('conteudo')
<div class="container">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{ route('produtos_salvar') }}">             
                            <h2 class="text-center">Alterar produto - #{{ $produto->id }}</h2>
                            @csrf
                            <input type="hidden" name="id" value="{{ $produto->id }}">
                            <div class="form-group pt-3 pb-3">
                                <input  value ="{{ $produto->nome }}" type = "text" name = "nome" class="form-control" placeholder="Nome" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input value="{{ $produto->quantidade }}" type = "text" name = "quantidade" class="form-control" placeholder="Quantidade" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input  value="{{ $produto->preco }}" type = "text" name = "preco" class="form-control" placeholder="Preço" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </div>
                         </form>
                </div>
            </div>   

@endsection