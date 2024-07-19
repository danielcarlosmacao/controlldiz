@extends('admin.layout.menu')

@section('title','Cadastros')

@section('content')

<div class="center" style="position:relative; top:50px;"><h3>Cadastros</h3></div>
<div class="  main">
    <div class="list">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Status</th><!--
                <th scope="col">Fev</th>
                <th scope="col">Mar</th>-->
              </tr>
            </thead>
            @foreach ($cadastros as $item)
            <tbody>
                <th scope="row" @class(['p-2', 'font-bold' => true])>{{$item->name}}</th>   
                  <!--<td>
                    
                  </td>-->
                  <td class="list" style="text-align: center;">
                    {{$item->status}}
                  </td>
                  <td class="list">
                    <a href="/admin/dizimista/create/{{$item->id}}" class="btn deep blue"><i class="material-icons">add</i></a>&nbsp
                    <a href="/admin/cadastro/edit/{{$item->id}}" class="btn deep blue"><i class="material-icons">edit</i></a>
                  </td>
                  <td></td>
                  
            </tbody>
        @endforeach


    </div>
</div>


@endsection
