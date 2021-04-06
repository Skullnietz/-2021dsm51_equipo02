@extends('dashboard')
@section('title')
Inventario
@endsection
@section('content')


<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Inventario</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
      </div>
      @if (Auth::user()->perfil == 'Administrador')
      <a href="{{route('createproduct')}}" type="button" class="btn btn-sm btn-outline-secondary ">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
        Agregar Producto
      </a>
      @endif
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>ID</th>
          <th>Imagen</th>
          <th>Producto</th>
          <th>Costo</th>
          <th>Existencias</th>
          <th>Categoria</th>
          <th>Descripcion</th>
          <th>Creado</th>
          <th>Actualizado</th>
          @if (Auth::user()->perfil == 'Administrador')
          <th>Eliminar</th>
          <th>Editar</th>
          @endif
        </tr>
      </thead>
      <tbody>
        @foreach($productos as $producto)
        <tr>

          <td>{{$producto->id}}</td>
          <td><img  width="100" class= "rounded "src="{{ asset('Imagenes').'/'.$producto->img}}" alt="imgproduct"></td>
          <td>{{$producto->producto}}</td>
          <td>{{$producto->costo}}</td>
          <td>{{$producto->existencias}}</td>
          <td>{{$producto->categoria}}</td>
          <td>{{$producto->descripcion}}</td>
          <td>{{$producto->created_at}}</td>
          <td>{{$producto->updated_at}}</td>
          @if (Auth::user()->perfil == 'Administrador')
          <form action="{{route('productos.destroy',$producto)}}" method="post">
            <form action="" method="post">
            @csrf
            @method('delete')
          <td>
            <button type="submit" class="btn btn-round"><i class="fas fa-trash"></i></button>
          </td>
          </form>
          <td>
              {{-- <a  class="btn btn-round" href="{{route('productos.edit',$producto)}}"><i class="fas fa-edit"></i></a> --}}
              <a  class="btn btn-round" href="{{route('productos.edit',$producto)}}"><i class="fas fa-edit"></i></a>
          </td>


        </tr>
        @endif
        @endforeach

      </tbody>
    </table>
  </div>
@endsection
