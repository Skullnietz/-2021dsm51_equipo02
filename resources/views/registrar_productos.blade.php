@extends('dashboard')
@section('title')
Resgistrar Productos
@endsection
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Resgistrar Productos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
        This week
      </button>
    </div>
  </div>

            <form action="{{ route ('guardarProductos')}}" method="POST" name="nuevo">

            	{{ csrf_field() }}

					<div style="padding: 1%;">
						Nombre Del Producto : <input type="text" name="producto" value="{{ old('producto')}}">
					</div>
					@if($errors->first('producto')) <i>{{$errors -> first ('producto')}}</i>@endif

					<div style="padding: 1%;">
						Costo : <input type="number" name="costo" value="{{ old('costo')}}">
					</div>
					@if($errors->first('costo')) <i>{{$errors -> first ('costo')}}</i>@endif
					

					<div style="padding: 1%;">
						Existencias : <input type="number" name="existencias"><br>
					</div>
					@if($errors->first('precio')) <i>{{$errors -> first ('precio')}}</i>@endif

					<div style="padding: 1%;">
					<!-- como cambiar el tamaño -->
                    <div style="padding: 1%;">
                        Categoria :
                        <select name="select">
                            <option selected>Seleciona una opcion</option>
                        
                            <option value="{{ $errors->categoria }}">{{ $errors->categoria }}</option>  
                            
                        </select>
                    </div>

					<div style="padding: 1%;">
						Descripcion : <input type="text" name="descripcion"><br>
					</div>
					@if($errors->first('descripcion')) <i>{{$errors -> first ('descripcion')}}</i>@endif

					<input type="submit" value="Enviar">
				</form>
					

  @endsection