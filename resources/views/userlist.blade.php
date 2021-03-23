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
      <a href="{{route('registro')}}" type="button" class="btn btn-sm btn-outline-secondary ">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
        Agregar Usuario
      </a>
    </div>
  </div>

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
          <td><a href="{{route('users.show', $user->id)}}"><img src="Imagenes/avatar.png" alt="img-avatar" width=50></a></td>
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
              <a  class="btn btn-round" href="{{route('users.edit',$user)}}"><i class="fas fa-edit"></i></a>
          </td>


        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
@endsection
