@extends('master')
@section('titulo', 'Index')
@section('corpo')

<center>
    <br><br>
<h3>Bem vindo ao iSangue!</h3>
<!-- an image of blood donator -->
<img src="img/isangue-logo.png" width="15%"/> 


<br><br>
<h3 class="card-title">O que é o iSangue?</h3></center>
<div class="container">

<h4 class="text-justify"> 
    O iSangue Laravel é um sistema de gerenciamento de cadastro Doadores de Sangue, 
    Cadastro de cedentes disponibilizadores de locais para coleta de sangue e cadastro de entidades Coletoras de sangue, 
    que realizam coletas remotas. </h4>
</div>
<br><br>

<div class="container col-sm-3"
<center>
<h4> Integrantes do Grupo:</h4>
<ul class="list-group">
  <li class="list-group-item">Ananda Hike Fernandes</li>
  <li class="list-group-item">Ewerton Guimarães</li>
  <li class="list-group-item">Juliane Aparecida Monteiro dos Santos</li>
  <li class="list-group-item">Luciano Antonio Rodrigues</li>
  <li class="list-group-item">Victor Gabriel Leme da Silva</li>
</ul>
</center>
</div>

<br><br>

@endsection