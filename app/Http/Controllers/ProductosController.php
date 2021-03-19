<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarProductosRequest;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function productos()
    {
        $usus = Producto::all();
        //dd($usus);
        return  view("productos")
        ->with(['usus' => $usus]);
    }


    public function guardarProductos(ValidarProductosRequest $request2){

        $usu = Producto::create($request2->only('producto','costo', 'existencias','categoria','img','descripcion'));
        return redirect()->route('registrarProductos');
     }

    public function registrarProductos()
    {
        return  view("registrar_productos");
    }

    

    
    public function modificarProductos(Producto $id){
        return view("editarProductos")
            ->with(['usu' => $id]);
    }
    
    public function salvarProductos(Producto $id, Request $request){

        $id->update($request->only('producto','costo', 'existencias','categoria','descripcion'));
        
       return redirect()->route('productos');
    }

    public function borrarProducto(Producto $id){
        $id->delete();
        return redirect()->route('productos');
    }

    

    

    
}
