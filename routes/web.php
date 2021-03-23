<?php
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\ProductosController;
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
Route::name('Iniciosesion')->get('/Iniciosesion', function () {return view('Iniciosesion');})->middleware('guest');
Route::name('miusuario')->get('/miusuario', function () {return view('miusuario');});
Route::name('Inventario')->get('/Inventario', function () {return view('Inventario');});
Route::name('editarusu')->get('/editarusuario', function () {return view('editarusuario');});
Route::name('editarusu2')->get('/editarusuario2', function () {return view('editarusuario2');});
Route::name('carrito')->get('/carrito', function () {return view('carrito');});
Route::name('registro')->get('/registro', function () {return view('registro');});
Route::name('pedidos')->get('/pedidos', function () {return view('pedidos');});
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
Route::post('users', [UsersController::class, 'store'])->name('users.store');
Route::get('userlist', [UsersController::class, 'index2'])->name('users.index');
Route::get('users/{user}', [UsersController::class, 'show'])->name('users.show');
Route::patch('users/{user}', [UsersController::class, 'update'])->name('users.update');
Route::patch('users/{user}/update', [UsersController::class, 'update2'])->name('users.update2');
Route::delete('users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');
//----------------------------- Productos -------------------------------------------------
Route::get('productos', [ProductosController::class, 'index2'])->name('productos.index');
Route::get('productos/{producto}', [ProductosController::class, 'show'])->name('productos.show');
