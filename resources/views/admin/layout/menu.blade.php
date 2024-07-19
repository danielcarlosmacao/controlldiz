<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title')</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/css/materialize/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="/css/materialize/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="/css/style.css"  media="screen,projection"/>
    <!--Bootstrap-->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!--validar depois-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<!--
<div style="text-align:center;margin-top:25px;marin-bottom:15px;font-weight:bold;texxxt-decoration:none; color:#484848;" >
    <a style="color:#000;" href="https://www.linkedin.com/in/arjunamgain/" target="_blank">My Profile</a>
</div>-->
<!--Inicio Menu-->
<body class="background">
	 <div class="content" >
	 
		<ul class="exo-menu"  style="z-index:999">
			<li><a class="active" href="/"><i class="fa fa-home"></i> Home</a></li>
			<li class="drop-down"><a href="#"><i class="fa fa-cogs"></i>Dizimistas</a>
				<!--Drop Down-->
				@auth
				<ul class="drop-down-ul animated ">
				<li class="flyout-right"><a href="#">Cadastros</a><!--Flyout Right-->
					<ul class="animated fadeIn">
						<li><a href="/admin/cadastro/list">Listar</a></li>
						<li><a href="/admin/cadastro/new">Inserir</a></li>
						<li><a href="#">outros</a></li>
					</ul>
				</li>
				<li class="flyout-right"><a href="#">Dizimista</a><!--Flyout Right-->
					<ul class="animated fadeIn">
						<li><a href="/admin/dizimista/list">Listar</a></li>
						<li><a href="#">outros</a></li>
						<li><a href="#">outros</a></li>
					</ul>
				</li>
				<li><a href="/admin/lancamento">Lancamento</a></li>
				</ul>
				<!--//End drop down-->
			@endauth
			
			</li>
			<li><a href="#"><i class="fa fa-cogs"></i> Serviços</a></li>	
			<li><a href="#"><i class="fa fa-briefcase"></i> Portfolio</a></li>
        </li>
		@auth
		<form action="/logout" method="POST">
			@csrf
			<a href="/logout" class="toggle-menu visible-xs-block" onclick="event.preventDefault();this.closest('form').submit()"><i class="material-icons">lock_outline</i></a>
		</form>	
		@endauth

		@guest 
		<a href="/login" class="toggle-menu visible-xs-block" ><i class="material-icons">lock_open</i></a>
		@endguest


	</ul>

	 
	 </div>
	 




<!--Final Menu-->

    @yield('content')
    
<footer>
    <p>site &copy; 2024</p>
</footer>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="/js/materialize/materialize.js"></script>
<script type="text/javascript" src="/js/materialize/materialize.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<!--Bootstrap-->
<!--<script type="text/javascript" src="/js/bootstrap.js" ></script>
<script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>-->
</html>