@extends('dashboard')
@section('title')
Mis dispositivos
@endsection
@section('content')


<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Estatus de los dispositivos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>ID</th>
          <th>Imagen</th>
          <th>Dispositivo</th>
          <th>Interaccion</th>
          <th>Estado</th>
          <th>Creado</th>
          <th>Actualizado</th>

        </tr>
      </thead>
      <tbody>
        @foreach($devices as $device)
        <tr>

          <td>{{$device->id}}</td>
          @if ($device->foco == 'SI')
          @if ($device->Estado == 'ON')
          <td><img  width="100" class= "rounded "src="{{ asset('Imagenes/focoON.png')}}" alt="imgproduct"></td>
          @else
          <td><img  width="100" class= "rounded "src="{{ asset('Imagenes').'/'.$device->img}}" alt="imgproduct"></td>
          @endif
          @endif
          @if ($device->foco == 'NO')
          @if ($device->Estado == 'ON')
          <td><img  width="100" class= "rounded "src="{{ asset('Imagenes').'/'.$device->img}}" alt="imgproduct"></td>
          @else
          <td><img  width="100" class= "rounded "src="{{ asset('Imagenes').'/'.$device->img}}" alt="imgproduct"></td>
          @endif
          @endif
          <td>{{$device->Dispositivo}}</td>
          <td>Usuario: <h4>{{$device->user_id}}</h4></td>
          <td>{{$device->Estado}}</td>
          <td>{{$device->created_at}}</td>
          <td>{{$device->updated_at}}</td>
        </tr>

        @endforeach

      </tbody>
    </table>
  </div>
@endsection
