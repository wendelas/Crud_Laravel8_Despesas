@extends('adm.app')
@section('despesa', 'cadastrar novas despesas')

@section('content')
    <h1>Cadastrar novas Despesas</h1>
    @csrf
    <form action="{{route('despesas.store')}}" method="post"> 
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="descricao" placeholder="Descrição:">
        <button type="submit">Enviar</button>
    </form>
@endsection