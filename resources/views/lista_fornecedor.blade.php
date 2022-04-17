@extends('template')

@section('conteudo')
@routes
<div class="container">
            <div class="table-overflow" style= "height: 750; overflow: auto;">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">CEP</th>
                            <th scope="col">cidade</th>
                            <th scope="col">estado</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($fornecedores as $f)
                    <tr>
                        <td>{{$f->nome}}</td>
                        <td>{{$f->endereco}}</td>
                        <td>{{$f->cep}}</td>
                        <td>{{$f->cidade}}</td>
                        <td>{{$f->estado}}</td>
                        <td>
                            <a href="{{ route('fornecedores_alterar', ['id' => $f->id]) }}" class="btn btn-warning">Alterar</a>
                            <a href="#" onclick="excluir({{ $f->id }})" class="btn btn-danger">Excluir</a>
                        </td>
                     </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
</table>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o fornecedor ${id}?`)){
            location.href = route('fornecedores_excluir', {'id':id});
        }
    }
</script>
@endsection