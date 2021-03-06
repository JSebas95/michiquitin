@extends('layouts.app')

@section('titulo')
  <h4>Cartera</h4>
  @endsection

@section('content')

  <div class="container">
    <h1>Historico de menores deudas</h1>
  <nav class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
          <li><a href="{{ URL::to('/consultas') }}">Mas consultas</a></li>
          <li><a href="{{ URL::to('/consultas/planes') }}">Planes mas solicitados</a></li>
          <li><a href="{{ URL::to('/consultas/mdeudas') }}">Historico de mayores deudas</a>
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
        @foreach($fecha as $fec)
            <tr>
              <td>{{$a}} <?php $a++; ?></td>
              <td>{{ $fec->user->id_tipo }}</td>
              <td>{{ $fec->user->name }}</td>
              <td>No. Deuda {{ $fec->id_deuda}}</td>
              <td>{{ $fec->valor_a_pagar }}</td>
              <td>{{ $fec->estado }}</td>
          </tr>
        @endforeach
        </tbody>
    </table>

  </div>
  </div>
@endsection