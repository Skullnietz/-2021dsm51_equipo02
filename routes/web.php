<?php
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ProductosResource;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::name('inicio')->get('/inicio', function () {return view('welcome');});
Route::view('Iniciosesion', 'Iniciosesion')->middleware('guest');
Route::name('Iniciosesion')->get('/Iniciosesion', function () {return view('Iniciosesion');});
Route::name('productos')->get('/productos', function () {return view('productos');});
Route::name('userlist')->get('/userlist', function () {return view('userlist');});
Route::name('carrito')->get('/carrito', function () {return view('carrito');});
Route::name('pedidos')->get('/pedidos', function () {return view('pedidos');});
Route::post('Iniciosesion', function (){
    $credentials = request()->only('email','password');

    if(Auth::attempt($credentials)){
        request()->session()->regenerate();
        return redirect('productos');
    }
    return redirect('Iniciosesion');
});

Route::view('dashboard', 'dashboard')->middleware('auth');


Route::get('/users', function () {
    return UserResource::collection(User::all());
});


Route::get('/user/{id}', function ($id) {
    return new UserResource(User::findOrFail($id));
});

//-------------------------Productos----------
Route::name('productos')->get('productos/', 'App\Http\Controllers\ProductosController@productos');

Route::name('guardarProductos')->post('guardarProductos/', 'App\Http\Controllers\ProductosController@guardarProductos');

Route::name('modificarProductos')->get('modificarProductos/{id}', 'App\Http\Controllers\ProductosController@modificarProductos');

Route::name('salvarProductos')->put('salvarProductos/', 'App\Http\Controllers\ProductosController@salvarProductos');

Route::name('borrarProducto')->get('borrarProducto/', 'App\Http\Controllers\ProductosController@borrarProducto');

Route::name('registrarProductos')->get('registrarProductos/', 'App\Http\Controllers\ProductosController@registrarProductos');