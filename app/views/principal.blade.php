@extends('layout')

@section('content')

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#">Inicio</a>
        <a class="navbar-brand" href="#">Opcion2</a>
        <a class="navbar-brand" href="#">Opcion3</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse navbar-form navbar-right">
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <select class="form-control">
            <option value="administrativo" >Administrativo </option>
            <option value="escuela" >Escuela</option>
          </select>
        </div>
      </form>
    </div><!--/.navbar-collapse -->
  </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1>SISTEMA DE GESTION DE INDICADORES</h1>
  </div>
</div>

<div class="container">
  <center>
          
  </center> 
</div>

    @stop