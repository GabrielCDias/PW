@extends('template')

@section('conteudo')
@routes
<div class="container">
            <div class="table-overflow" style= "height: 750; overflow: auto;">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Renda</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($clientes as $c)
                    <tr>
                        <td>{{$c->nome}}</td>
                        <td>{{$c->telefone}}</td>
                        <td>{{$c->renda}}</td>
                        <td>
            <a href="{{ route('clientes_alterar', ['id' => $c->id]) }}" class="btn btn-warning">Alterar</a>
            <a href="#" onclick="excluir({{ $c->id }})" class="btn btn-danger">Excluir</a>
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
        if (confirm(`Deseja realmente excluir o cliente ${id}?`)){
            location.href = route('clientes_excluir', {'id':id});
        }
    }
</script>
@endsection