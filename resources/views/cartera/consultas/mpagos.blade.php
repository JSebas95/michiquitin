@extends('layouts.app')

@section('titulo')
  <h4>Cartera</h4>
  @endsection

@section('content')

  <div class="container">
    <h1>Historico de mayores pagos</h1>
  <nav class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
          <li><a href="{{ URL::to('/consultas') }}">Mas consultas</a></li>
          <li><a href="{{ URL::to('/consultas/planes') }}">Planes mas solicitados</a></li>
          <li><a href="{{ URL::to('/consultas/mdeudas') }}">Historico de mayores deudas</a>
            <li><a href="{{ URL::to('/consultas/mayores') }}">Historico de menores deudas</a></li>
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
                <td>Valor del pago</td>
                <td>Fecha de pago</td>
            </tr>
        </thead>
        <tbody>
          <?php $a = 1; ?>
        @foreach($pagos as $pag)
            <tr>
              <td>{{$a}} <?php $a++; ?></td>
              <td>{{ $pag->deuda->user->id_tipo }}</td>
              <td>{{ $pag->deuda->user->name }}</td>
              <td>No. Deuda {{ $pag->id_deuda}}</td>
              <td>{{ $pag->valor }}</td>
              <td>{{ $pag->created_at }}</td>
          </tr>
        @endforeach
        </tbody>
    </table>

  </div>
  </div>
@endsection