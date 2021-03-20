@extends('dashboard')
@section('title')
Usuarios
@endsection
@section('content')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tabla de Usuarios</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
      </div>

    </div>
  </div>



  <h2>Usuarios Registrados</h2>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>ID</th>
          <th>Imagen</th>
          <th>Perfil</th>
          <th>Nombre</th>
          <th>E-mail</th>
          <th>Sexo</th>
          <th>Fecha Nacimiento</th>
          <th>Eliminar</th>
          <th>Editar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>

          <td>{{$user->id}}</td>
          <td><img src="Imagenes/avatar.png" alt="img-avatar" width=50></td>
          <td>{{$user->perfil}}</td>
          <td>{{$user->name}} {{$user->primer_apellido}} {{$user->segundo_apellido}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->sexo}}</td>
          <td>{{$user->fecha_nacimiento}}</td>
          <form action="{{route('users.destroy',$user)}}" method="post">
            @csrf
            @method('delete')
          <td>
            <button type="submit" class="btn btn-round"><i class="fas fa-trash"></i></button>
          </td>
          </form>
          <td>
            <button class="btn btn-round" href="#"><i class="fas fa-edit"></i></button>
          </td>


        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
@endsection
