@extends('despesas')

@section('content')
<h1 class="text-center">Despesas</h1><hr>
<a href="{{route('despesas.create')}}">cadastrar</a>

<div class="col-8 m-auto">
    <<table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">descricao</th>
            <th scope="col">data</th>
            <th scope="col">valor</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
        </tbody>
      </table>
</div>
@endsection
