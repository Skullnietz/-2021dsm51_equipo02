<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductosResource;
use App\Http\Resources\ProductosCollection;
use App\Models\Producto;



class ProductosController extends Controller
{
    public function index(Request $request)
    {
        $productos = Producto::select('id', 'categoria', 'producto', 'costo', 'existencias', 'descripcion', 'img')
            ->when($request->categoria, function($query) use ($request) {
                return $query->where('categoria', $request->categoria);
            })
            ->when($request->ids, function($query) use ($request) {
                return $query->whereIn('id', $request->ids);
            })
            ->get();
        return response()->json($productos->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge([
            'img' => Producto::generaImagen()
        ]);
        $request->validate(Producto::reglas());
        return response()->json(Producto::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->merge([
            'img' => Producto::generaImagen()
        ]);
        $request->validate(Producto::reglas());
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        return response()->json($producto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
