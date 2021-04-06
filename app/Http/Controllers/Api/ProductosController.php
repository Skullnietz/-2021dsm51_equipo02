<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\Http\Resources\ProductosResource;
use App\Http\Resources\ProductosCollection;
use App\Models\Producto;
use App\Models\Dispositivo;




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

    public function index2()
    {
        $devices = Dispositivo::all();
        $paquetes = Producto::where('categoria','Paquete')->get();
        $dispositivos = Producto::where('categoria','Dispositivo')->get();
        $componentes = Producto::where('categoria','Componente')->get();
        $productos = Producto::all();
        //return dd($componentes);
        return view('productos',compact('productos','componentes','dispositivos','paquetes','devices'));

    }
    public function index3()
    {
        $devices = Dispositivo::all();
        $productos = Producto::all();
        return view('Inventario',compact('productos','devices'));

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

        $request->validate(Producto::reglas());
       return response()->json(Producto::create($request->all()));
    }
    public function store2(Request $request, Dispositivo $devices)
    {

        $request->validate([
            'img' => 'required|image|max:2048',
            'producto' => 'required',
            'costo' => 'required',
            'categoria' => 'required',
            'descripcion' => 'required',
            'existencias' => 'required',
        ]);
        // Producto::create($request->only('producto', 'costo', 'categoria', 'descripcion','existencias', 'img'));
        $imagen = $request-> file('img');
        $nombre = time().'.'.$imagen->getClientOriginalExtension();
        $destino = public_path('/Imagenes');
        $request->img->move($destino, $nombre);
        Producto::create([
            'producto'=> $request->producto,
             'costo'=> $request->costo,
              'categoria'=> $request->categoria,
               'descripcion'=> $request->descripcion,
               'existencias'=> $request->existencias,
                'img'=> $nombre,
        ]);


        return redirect()->route('productos.index2');


    }

    public function edit2($id)
    {
        $devices = Dispositivo::all();
        $producto=Producto::findOrFail($id);
        return view ("editarproducto", compact("producto","devices"));
    }

    public function update2(Producto $producto, Request $request)
    {
        $request->validate([
            'img' => 'required|image|max:2048',
            'producto' => 'required',
            'costo' => 'required',
            'categoria' => 'required',
            'descripcion' => 'required',
            'existencias' => 'required',
        ]);
        $imagen = $request-> file('img');
        $nombre = time().'.'.$imagen->getClientOriginalExtension();
        $destino = public_path('/Imagenes');
        $request->img->move($destino, $nombre);
        $producto->update([
            'producto' => request('producto'),
            'costo' => request('costo'),
            'existencias' => request('existencias'),
            'categoria' => request('categoria'),
            'descripcion' => request('descripcion'),
            'img' => $nombre,
        ]);
        return redirect()->route('productos.index2');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $devices = Dispositivo::all();
        $producto=Producto::findOrFail($id);
        return view ("showproduct", compact("producto","devices"));
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
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index2');
    }

}
