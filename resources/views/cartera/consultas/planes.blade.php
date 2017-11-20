@extends('layouts.app')

@section('titulo')
  <h4>Cartera</h4>
  @endsection

@section('content')

  <div class="container">
    <h1>Planes</h1>
  <nav class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
          <li><a href="{{ URL::to('/consultas') }}">Mas consultas</a></li>
          <li><a href="{{ URL::to('/consultas/mdeudas') }}">Historico de mayores deudas</a></li>
          <li><a href="{{ URL::to('/consultas/mayor') }}">Historico de menores deudas</a></li>
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
                <td>Número de plan</td>
                <td>Duración del plan</td>
            </tr>
        </thead>
        <tbody>
          <?php $a = 3; ?>
        @foreach($plan as $pla)
            <tr>
              <td>Puesto No. {{$a}} <?php $a--; ?></td>
              <td>No. {{ $pla->id_plan_de_pago }}</td>
              <td>{{ $pla->nombre_plan }}</td>
          </tr>
        @endforeach
        </tbody>
    </table>

  </div>
  </div>
@endsection