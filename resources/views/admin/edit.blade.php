@extends('adm.app')
@section('despesa', 'cadastrar novas despesas')

@section('content')
    <h1>Editar Despesas{{$id}}</h1>
    @csrf
    <form action="{{route('despesas.update', [$id])}}" method="post"> 
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="descricao" placeholder="Descrição:">
        <button type="submit">Editar</button>
    </form>
@endsection