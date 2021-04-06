<?php
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\ProductosController;
use App\Http\Controllers\Api\DireccionsController;
use App\Http\Controllers\Api\StatesController;
use App\Http\Controllers\Api\TownsController;
use App\Http\Controllers\Api\DispositivosController;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ProductosResource;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Dispositivo;

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
Route::name('arduino1')->get('/arduino1', function () {return view('arduino1');});
Route::name('arduino2')->get('/arduino2', function () {return view('arduino2');});
Route::name('arduino3')->get('/arduino3', function () {return view('arduino3');});
Route::name('Iniciosesion')->get('/Iniciosesion', function () {return view('Iniciosesion');})->middleware('guest');
// Route::name('miusuario')->get('/miusuario', function () { $devices = Dispositivo::all(); return view('miusuario', compact("devices"));});
Route::name('Inventario')->get('/Inventario', function () {return view('Inventario');});
Route::name('editarusu')->get('/editarusuario', function () {$devices = Dispositivo::all(); return view('editarusuario', compact("devices"));});
Route::name('editarusu2')->get('/editarusuario2', function () {return view('editarusuario2');});
Route::name('carrito')->get('/carrito', function () {$devices = Dispositivo::all(); return view('carrito', compact("devices"));});
Route::name('registro')->get('/registro', function () {return view('registro');});
Route::name('pedidos')->get('/pedidos', function () {$devices = Dispositivo::all(); return view('pedidos', compact("devices"));});
//-----------------------------AUTH-------------------------------
Route::post('Iniciosesion', function (){
    $credentials = request()->only('email','password');

    if(Auth::attempt($credentials)){
        request()->session()->regenerate();
        return redirect('productos');
    }
    return redirect('Iniciosesion');
});
Route::get('user/logout', [UsersController::class, 'logout'])->name('user.logout');
Route::view('dashboard', 'dashboard')->middleware('auth');
//-----------------------------API DMM ------------------------------
Route::get('/users', function () {
    return UserResource::collection(User::all());
});
Route::get('/user/{id}', function ($id) {
    return new UserResource(User::findOrFail($id));
});
//----------------------------- Usuarios -------------------------------------------------
Route::get('users/{user}/edit', [UsersController::class, 'edit2'])->name('users.edit');
Route::post('users', [UsersController::class, 'store2'])->name('users.store');
Route::get('users', [UsersController::class, 'index2'])->name('users.index');
Route::get('users/{user}', [UsersController::class, 'show'])->name('users.show');
Route::patch('users/{user}', [UsersController::class, 'update2'])->name('users.update');
Route::patch('users/{user}/update', [UsersController::class, 'update3'])->name('users.update2');
Route::delete('users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');
//----------------------------- Productos -------------------------------------------------
Route::get('productos', [ProductosController::class, 'index2'])->name('productos.index');
Route::get('Inventario', [ProductosController::class, 'index3'])->name('productos.index2');
Route::get('productos/{producto}', [ProductosController::class, 'show'])->name('productos.show');
Route::post('productos', [ProductosController::class, 'store2'])->name('productos.store');
Route::name('createproduct')->get('/createproduct', function () {return view('createproduct');});
Route::get('productos/{producto}/edit', [ProductosController::class, 'edit2'])->name('productos.edit');
Route::patch('productos/{producto}/update', [ProductosController::class, 'update2'])->name('productos.update2');
Route::delete('productos/{producto}', [ProductosController::class, 'destroy'])->name('productos.destroy');
//----------------------------- Direcciones -------------------------------------------------
Route::get('miusuario', [DireccionsController::class, 'index'])->name('miusuario');
Route::post('direccions', [DireccionsController::class, 'store'])->name('direccions.store');
Route::get('createdireccion', [StatesController::class, 'index'])->name('states.index');
Route::get('/states/{id}/towns', [TownsController::class, 'byState']);
Route::patch('direccions/{direccion}/update', [DireccionController::class, 'update'])->name('direccion.update');
// Route::get('direccions/{producto}/edit', [ProductosController::class, 'edit2'])->name('productos.edit');
// Route::patch('direccions/{producto}/update', [ProductosController::class, 'update2'])->name('productos.update2');
// Route::delete('direccions/{producto}', [ProductosController::class, 'destroy'])->name('productos.destroy');
//----------------------------- Dispositvo -------------------------------------------------
Route::get('devices/{device}', [DispositivosController::class, 'show'])->name('dispositivo.show');
 Route::get('devices', [DispositivosController::class, 'index'])->name('dispositivos.index')->middleware('auth');;
Route::get('dispositivo/{dispositivo}/edit', [DispositivosController::class, 'edit'])->name('dispositivo.edit');
Route::get('dispositivos/tabla', [DispositivosController::class, 'tabla'])->name('dispositivos.tabla');
Route::put('dispositivos/{dispositivo}/update', [DispositivosController::class, 'update'])->name('dispositivo.update');
