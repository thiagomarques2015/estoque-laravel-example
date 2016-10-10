@extends('layout.principal')

@section('conteudo')
<h1>Listagem de produtos</h1>

<table class="table">
    @forelse($produtos as $p)
    <tr class="{{ $p->quantidade <= 1 ? 'danger' : ''}}" >
        <td>{{ $p->nome }}</td>
        <td>{{ $p->valor }}</td>
        <td>{{ $p->descricao }}</td>
        <td>{{ $p->quantidade }}</td>
        <td>
            <a href="/produtos/mostra/{{ $p->id }}" >
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </a>
        </td>
    </tr>
    @empty
        <h4>
            <span class="label label-danger pull-right">
                Um ou menos itens no estoque
            </span>
        </h4>
    @endforelse
</table>

@if(old('nome'))
    <div class="alert alert-success">
        Produto {{ old('nome') }} adicionado com sucesso!
    </div>
@endif

@stop