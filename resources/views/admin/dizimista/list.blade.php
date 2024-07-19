@extends('admin.layout.menu')

@section('title','Cadastros')

@section('content')

<div class="center" style="position:relative; top:50px;"><h3>Dizimistas</h3></div>
<div class="  main">
    <div class="list">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Status</th><!---
                <th scope="col">Fev</th>
                <th scope="col">Mar</th>-->
              </tr>
            </thead>   @foreach ($dizimistas as $item)
            <tbody>
           
                 
          
                <th scope="row" @class(['p-2', 'font-bold' => true])>{{$item->registers->name}}</th>   
                  <!--<td>
                    
                  </td>-->
                  <td class="list" style="text-align: center;">
                    {{$item->status}}
                  </td>
                  <td class="list">
                    <a href="/admin/lancamento/create/{{$item->id}}" class="btn deep blue"><i class="material-icons">credit_card</i></a>
                  </td>
                    
            </tbody> @endforeach


    </div>
</div>


@endsection
