@extends('template.master')
@section('titulo','excluir')
@section('conteudo')    


<h1>Deseja mesmo excluir a pessoa '{{$pessoa->nome}}'?</h1>

<form action="/pessoa/{{ $pessoa->id}}" method="post">
    @csrf
    @method('DELETE')
    <input class="btn btn-danger" type="submit" value="sim">
</form>

<a class="btn btn-primary" href="/pessoas/">Não</a>

@endsection
