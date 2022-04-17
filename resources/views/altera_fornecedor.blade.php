@extends('template')

@section('titulo')
Alterar Fornecedor - #{{ $fornecedor->id }}
@endsection

@section('conteudo')
<h1>Alterar fornecedor - #{{ $fornecedor->id }}</h1>
<div class="container">
                <div class="row pt-5 pb-5 text-center">
                    <form method="post" action="{{ route('fornecedores_salvar') }}">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{ $fornecedor->id }}" >

                        <div class="form-group pt-3 pb-3">
                        <input type="text" name="nome" value="{{ $fornecedor->nome }}" class="form-control" placeholder="Nome" required="required">
                        </div>

                        <div class="form-group pt-3 pb-3">
                        <input type="text" name="endereco" value="{{ $fornecedor->endereco }}" class="form-control" placeholder="Endereço" required="required">
                        </div>

                        <div class="form-group pt-3 pb-3">
                        <input type="text" name="cep" value="{{ $fornecedor->cep }}" class="form-control" placeholder="CEP" required="required">
                        </div>

                        <div class="form-group pt-3 pb-3">
                        <input type="text" name="cidade" value="{{ $fornecedor->cidade }}" class="form-control" placeholder="Cidade" required="required">
                        </div>

                        <div class="form-group pt-3 pb-3">
                                    <select name = "estado"class="form-control" required="required"  value="{{ $fornecedor->estado }}">
                                    <option>SC</option>
                                    <option>RS</option>
                                    <option>PR</option>
                                    <option>SP</option>
                                    <option>RJ</option>
                                    </select>
                            </div>

                        <div class="form-group pt-3 pb-3">
                        <input type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
</div>
@endsection