@extends('master')
@section('titulo', 'AdminEvento')
@section('corpo')
    <div class="container-fluid col-12">
        <h3>Administradores X Eventos:</h3>
        <h2><a href="/adminEvento/create" class="btn btn-primary ">Nova relação Administrador X Evento</a></h2>
        <br>

        <table class="table">
            <thead>
            <tr> 
                <th>Administrador</th>
                <th>Evento que gerencia</th>
            </tr>
            </thead>
            <tbody>

      



          

<?php
use App\Models\Administrador;
use App\Models\CalendarioEvento;
            foreach($varView as $e)
            {
            $administrador = Administrador::where('id',$e->id_admin)->first();
            $evento = CalendarioEvento::where('id',$e->id_evento)->first();
                echo '<tr>';
                echo  ' <td>'. $administrador->nome.'</td>';
                echo   ' <td>'. $evento->nome_evento.'</td>';
               echo ' <td> <a href="/adminEvento/'.$e->id.'/edit" class="btn btn-primary btn-sm">Editar</a></td>';
                echo '  <td>  <a href="/adminEvento/'.$e->id.'" class="btn btn-primary btn-sm">Excluir</a></td>';
                echo '</tr>';
            } 
?>
  </tbody>
        </table>
    </div>


@endsection