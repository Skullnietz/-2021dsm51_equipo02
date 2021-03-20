<?php
use App\Http\Controllers\Api\UsersController;
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
Route::name('productos')->get('/productos', function () {return view('productos');});
Route::name('editarusu')->get('/editarusuario', function () {return view('editarusuario');});
Route::name('carrito')->get('/carrito', function () {return view('carrito');});
Route::name('registro')->get('/registro', function () {return view('registro');});
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

Route::get('user/logout', [UsersController::class, 'logout'])->name('user.logout');

Route::get('/users', function () {
    return UserResource::collection(User::all());
});


Route::get('/user/{id}', function ($id) {
    return new UserResource(User::findOrFail($id));
});


Route::post('users', [UsersController::class, 'store'])->name('users.store');
Route::get('userlist', [UsersController::class, 'index'])->name('users.index');
Route::patch('users/{user}', [UsersController::class, 'update'])->name('users.update');
Route::delete('users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');
