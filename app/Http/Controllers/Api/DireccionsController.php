<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Direccion;
use App\Models\User;
use App\Models\Dispositivo;
use Illuminate\Support\Facades\Auth;
class DireccionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Dispositivo::all();
        // $user = User::find(Auth::user()->id);
        // $user->direccions;
        // return view('miusuario',compact('user', 'devices'));
        $direccions=Direccion::where('user_id',auth()->user()->id)->paginate();
        return view('miusuario',compact('direccions', 'devices'));

    }
    public function compra()
    {
        $devices = Dispositivo::all();
        // $user = User::find(Auth::user()->id);
        // $user->direccions;
        // return view('miusuario',compact('user', 'devices'));
        $direccions=Direccion::where('user_id',auth()->user()->id)->paginate();
        return view('compra',compact('direccions', 'devices'));

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
        $request->validate([
            'user_id' => 'required',
            'state_id' => 'required',
            'town_id' => 'required',
            'Calle' => 'required',
            'Indicaciones' => 'required',
            'CP' => 'required',
            'Telefono' => 'required|string|min:8|max:11',
        ]);
        // Producto::create($request->only('producto', 'costo', 'categoria', 'descripcion','existencias', 'img'));
        Direccion::create([
            'user_id'=> $request->user_id,
            'state_id'=> $request->state_id,
             'town_id'=> $request->town_id,
              'Calle'=> $request->Calle,
               'Indicaciones'=> $request->Indicaciones,
               'CP'=> $request->CP,
               'Telefono'=> $request->Telefono,
        ]);


        return redirect()->route('productos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        //
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
