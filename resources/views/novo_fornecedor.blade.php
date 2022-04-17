@extends('template')

@section('titulo')
Fornecedor- Novo
@endsection

@section('conteudo')
<h1>Novo Fornecedor</h1>
<div class="container">
                <div class="row pt-5 pb-5 text-center">
                        <form class="form-group" method = "post" action ="{{route('fornecedores_novo')}}">             
                            <h2 class="text-center">Cadastro de Fornecedores</h2>
                            @csrf
                            <div class="form-group pt-3 pb-3">
                                <input input type = "text" name = "nome" class="form-control" placeholder="Nome" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input type = "text" name = "endereco" class="form-control" placeholder="Endereço" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input type = "text" name = "cep" class="form-control" placeholder="CEP" required="required">
                            </div>
                            <div class="form-group pt-3 pb-3">
                                 <input type = "text" name = "cidade" class="form-control" placeholder="Cidade" required="required">
                            </div>

                            <div class="form-group pt-3 pb-3">
                                    <select name = "estado"class="form-control" required="required">
                                    <option>SC</option>
                                    <option>RS</option>
                                    <option>PR</option>
                                    <option>SP</option>
                                    <option>RJ</option>
                                    </select>
                            </div>

                            <div class="form-group pt-3 pb-3">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                         </form>
                </div>
            </div>   
@endsection