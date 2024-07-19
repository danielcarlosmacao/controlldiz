@extends('admin.layout.menu')

@section('title','Cadastros')

@section('content')
 <div class="center" style="position:relative; top:50px;"><h3>cadastro de -----</h3></div>
<!---->
<div class="container  main">

    <form method="POST" action="/admin/cadastro/create">@csrf
        <div class="form-row">
            <div class="col-md-8 mb-3">
                <label>Nome Completo:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="nome" required>
            </div>
            <div class="col-md-3 mb-3">
                    <label>Nasc:</label>
                    <input type="date" class="form-control" id="datenasc" name="datenasc" placeholder="" >
            </div>
            <div class="col-md-1 mb-3">
                    <label>N°:</label>
                    <input type="number" class="form-control" id="number" name="number" placeholder="N°" >
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>N° Celular:</label>
                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="" >
        </div>
            <div class="col-md-4 mb-3">
                <label>Estado Civil:</label>
                <input type="text" class="form-control" id="maritalstatus" name="maritalstatus" placeholder="" required>
            </div>
            <!----><div class="col-md-4 mb-3">
                    <label>Sexo:</label>
                   <input type="text" class="form-control" id="sex" name="sex" placeholder="" > 
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-8 mb-3">
                <label>endereço:</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="endereço" >
            </div>
            <div class="col-md-3 mb-3">
                <label>cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="cidade" >
            </div>
            <div class="col-md-1 mb-3">
                <label>Estado:</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="estado" >
            </div>
        </div>
        <div class="center">
            <button type="submit" class="btn btn-success">Salvar</button>&nbsp&nbsp&nbsp
            <button type="reset" class="btn btn-warning">Limpar</button>
        </div>
      </form>
</div>

@endsection
