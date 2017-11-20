@extends('layouts.app')

@section('titulo')
  <h4>Cartera</h4>
  @endsection

@section('content')

  <div class="container">
    <h1>Historico de Mayores deudas</h1>
  <nav class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
          <li><a href="{{ URL::to('/consultas') }}">Mas consultas</a></li>
          <li><a href="{{ URL::to('/consultas/mayor') }}">Historico de menores deudas</a></li>
          <li><a href="{{ URL::to('/consultas/planes') }}">Planes mas solicitados</a></li>
          <li><a href="{{ URL::to('/consultas/mpagos') }}">Mayores pagos</a></li>
      </ul>
  </nav>

  
  <div class="col-lg-12">

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Posición</td>
                <td>ID. Cliente</td>
                <td>Nombre del cliente</td>
                <td>Número de deuda</td>
                <td>Valor total</td>
                <td>Estado de la deuda</td>
            </tr>
        </thead>
        <tbody>
          <?php $a = 1; ?>
        @foreach($deudas as $deuda)
            <tr>
              <td>{{$a}} <?php $a++; ?></td>
              <td>{{ $deuda->user->id_tipo }}</td>
              <td>{{ $deuda->user->name }}</td>
              <td>No. Deuda {{ $deuda->id_deuda}}</td>
              <td>{{ $deuda->valor_a_pagar }}</td>
              <td>{{ $deuda->estado }}</td>
          </tr>
        @endforeach
        </tbody>
    </table>

  </div>
  </div>
@endsection