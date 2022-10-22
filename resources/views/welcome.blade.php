<?php
$sala_ocupada= true;
?>

@extends('adminlte::page')

@section('title', 'Controle de Acessos')


@section('content_header')
<center>
    <h1>Bem vindo!</h1>
</center>
@stop

@section('content')
<center>
    <p>Bem vindo ao painel de Controle de Acessos da Escola Senai Felix Guisard!</p>
</center>
<br>
<hr>
<br>


<center>
    <h2 class="text-primary ">Salas ocupadas ou abertas</h2>
</center>


<center>
    <div class="row col-5">



        <table class="table table-bordered border-dark text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Sala</th>
                    <th scope="col">Ultimo professor a usar</th>
                    <th scope="col">Livre ou ocupada?</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>509</td>
                    <td>Wilber</td>
                    @if($sala_ocupada == true)
                    <td class="bg-danger">Ocupada</td>
                    @else
                    <td class="bg-success">Livre</td>
                    @endif

                </tr>
                <tr>
                    <td>510</td>
                    <td>Reuel</td>
                    @if($sala_ocupada == false)
                    <td class="bg-danger">Ocupada</td>
                    @else
                    <td class="bg-success">Livre</td>
                    @endif


                </tr>
                <tr>
                    <td>511</td>
                    <td>Sudario</td>
                    @if($sala_ocupada == true)
                    <td class="bg-danger">Ocupada</td>
                    @else
                    <td class="bg-success">Livre</td>
                    @endif

                </tr>
                <tr>
                    <td>512</td>
                    <td>Anderson</td>
                    @if($sala_ocupada == true)
                    <td class="bg-danger">Ocupada</td>
                    @else
                    <td class="bg-success">Livre</td>
                    @endif

                </tr>

                <tr>
                    <td>513</td>
                    <td>Odil</td>
                    @if($sala_ocupada == False)
                    <td class="bg-danger">Ocupada</td>
                    @else
                    <td class="bg-success">Livre</td>
                    @endif

                </tr>

                <tr>
                    <td>514</td>
                    <td>Alison</td>
                    @if($sala_ocupada == true)
                    <td class="bg-danger">Ocupada</td>
                    @else
                    <td class="bg-success">Livre</td>
                    @endif

                </tr>
            </tbody>
        </table>
    </div>

</center>

<script>

</script>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
