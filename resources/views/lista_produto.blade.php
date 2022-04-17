@extends('template')

@section('conteudo')
@routes
<div class="container">
            <div class="table-overflow" style= "height: 750; overflow: auto;">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($produtos as $p)
                    <tr>
                        <td>{{$p->nome}}</td>
                        <td>{{$p->quantidade}}</td>
                        <td>{{$p->preco}}</td>
                        <td>
                            <a href="{{ route('produtos_alterar', ['id' => $p->id]) }}" class="btn btn-warning">Alterar</a>
                            <a href="#" onclick="excluir({{ $p->id }})" class="btn btn-danger">Excluir</a>
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
        if (confirm(`Deseja realmente excluir o produto ${id}?`)){
            location.href = route('produtos_excluir', {'id':id});
        }
    }
</script>
@endsection

