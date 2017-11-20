@extends('layouts.app')

@section('titulo')
  <h4>Cartera</h4>
  @endsection

@section('content')

  <div class="container">
    <h1>Que consulta desea hacer?</h1>

  
  <div class="col-lg-12">

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td><a href="{{ URL::to('/consultas/planes') }}">Planes mas solicitados</a></td>
                <td><a href="{{ URL::to('/consultas/mayor') }}">Historico de menores deudas</a></td>
                <td><a href="{{ URL::to('/consultas/mdeudas') }}">Historico de mayores deudas</a></td>
                <td><a href="{{ URL::to('/consultas/mpagos') }}">Mayores pagos</a></td>
            </tr>
        </thead>
    </table>

  </div>
  </div>
@endsection