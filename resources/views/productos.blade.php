@extends('dashboard')
@section('title')
Inventario
@endsection
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Inventario</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
        This week
      </button>
    </div>
  </div>

  <h2> Productos Registrados</h2>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <img src="{{ asset('imagenes/') }}" >
      <thead>
        <tr>
            <td><h3>Nombre</h3></td>
            <td><h3>Costo</h3></td>
            <td><h3>Existencias</h3></td>
            <td><h3>Categoria</h3></td>
            <td><h3>Imagen</h3></td>
            <td><h3>Descripcion</h3></td>
        </tr>
      </thead>
      @foreach($usus as $usu)
      <tbody>
          <tr>
            <td>{{ $usu->producto}}</td>
            <td>{{ $usu->costo}}</td>
            <td>{{ $usu->existencias}}</td>
            <td>{{ $usu->categoria}}</td>
            <td>{{ $usu->img}}</td>
            <td>{{ $usu->descripcion}}</td>
            <td><h3><a href="{{ route('modificarProductos', ['id' => $usu->id]) }}"><i class="fas fa-pen-square"></i> Editar</a></h3></td>
						<td><h3><a href="{{ route('borrarProducto', ['id' => $usu->id]) }}"><i class="fas fa-trash-alt"></i> Eliminar</a></h3></td>
          </tr>
      </tbody>
      @endforeach
    </table>
  </div>
@endsection
