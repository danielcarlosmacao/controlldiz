@extends('admin.layout.menu')

@section('title','Home')

@section('content')
<div class="center">
    @guest 
    <h1>realize o login</h1>
    @endguest
    @auth
    <h1>Voce esta logado</h1>
    @endauth
</div>

@endsection
