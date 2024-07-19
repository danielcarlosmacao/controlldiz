@extends('admin.layout.menu')

@section('title','Financeiro')

@section('content')



<div class="  main">
    <div class="center">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Jan</th>
                <th scope="col">Fev</th>
                <th scope="col">Mar</th>
                <th scope="col">Abr</th>
                <th scope="col">Mai</th>
                <th scope="col">Jun</th>
                <th scope="col">jul</th>
                <th scope="col">Ago</th>
                <th scope="col">Set</th>
                <th scope="col">Out</th>
                <th scope="col">Nov</th>
                <th scope="col">Dez</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dizimista as $item)<form action="/admin/lancamento/update/{{$item->id}}" method="GET">@csrf
              <tr><th scope="row" >{{$item->registers->name}}<input type="hidden" value="{{$item->id}}" name="id"></th>
                @foreach($item->devolution as $item) <td>
                  <input type="text" value="{{$item->value}}" name="{{$item->month}}" class="inputmin">
                </td> @endforeach
                  <td>
                    <button type="submit">salvar</button></form>
                  </td>
                </tr>
                @endforeach
            </tbody>
        


    </div>
</div>





@endsection
