<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;
use App\Models\User;
use App\Models\Dispositivo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::select('id', 'name', 'primer_apellido', 'segundo_apellido', 'sexo', 'perfil', 'fecha_nacimiento')
            ->when($request->perfil, function($query) use ($request) {
                return $query->where('perfil', $request->perfil);
            })
            ->when($request->ids, function($query) use ($request) {
                return $query->whereIn('id', $request->ids);
            })
            ->get();
        return response()->json($users->toArray());
    }

    public function index2()
    {
        $devices = Dispositivo::all();
        $users = User::all();
        return view('userlist',compact('users','devices'));

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

        $request->validate(User::reglas());
       return response()->json(User::create($request->all()));
    }
    public function store2(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'primer_apellido' => 'required',
            'email' => 'required',
            'perfil' => 'required',
            'fecha_nacimiento' => 'required',
            'password' => 'required',

        ]);

        User::create($request->only('email', 'name', 'sexo', 'perfil', 'primer_apellido','segundo_apellido','fecha_nacimiento')
        + [
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('Iniciosesion');
    }

    public function logout(Request $request){
        session()->flush();
        session()->forget('id');
        return redirect()->route('inicio');

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
        $user=User::findOrFail($id);
        return view ("showuser", compact("user","devices"));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('editarusuario',[
            'user' => $user
        ]);
    }

    public function edit2($id)
    {
        $devices = Dispositivo::all();
        $user=User::findOrFail($id);
        return view ("editarusuario2", compact("user","devices"));
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

        $request->validate(User::reglas());
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user);
    }
    public function update2(User $user )
    {
        $user->update([
            'name' => request('name'),
            'segundo_apellido' => request('segundo_apellido'),
            'primer_apellido' => request('primer_apellido'),
            'email' => request('email'),
            'sexo' => request('sexo'),
            'fecha_nacimiento' => request('fecha_nacimiento'),
            'perfil' => request('perfil'),
        ]);
        return redirect()->route('miusuario');

    }

    public function update3(User $user )
    {
        $user->update([
            'name' => request('name'),
            'segundo_apellido' => request('segundo_apellido'),
            'primer_apellido' => request('primer_apellido'),
            'email' => request('email'),
            'sexo' => request('sexo'),
            'fecha_nacimiento' => request('fecha_nacimiento'),
            'perfil' => request('perfil'),
        ]);
        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
