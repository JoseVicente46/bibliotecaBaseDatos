<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('cortos', function () {
    $cortos = [
        [
        'id' => 1,
        'titulo' => 'El corto más cortante',
        'director' => 'María Martín',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua.'
        ],
        [
        'id' => 2,
        'titulo' => 'Sin más',
        'director' => 'Pepa Pérez',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua.'
        ],
        [
        'id' => 3,
        'titulo' => 'Más o menos',
        'director' => 'Juan Jiménez',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua.'
        ],
        [
        'id' => 4,
        'titulo' => 'Tira pa\' ya',
        'director' => 'Sofía Sofín',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua.'
        ],
        [
        'id' => 5,
        'titulo' => 'Miedo',
        'director' => 'Pepe Parrilla',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua.'
        ]
        ];
    return view('cortos', compact('cortos'));
})->name("cortos");

Route::get('cortos/{id}', function ($id) {
    $cortos = [
        [
        'id' => 1,
        'titulo' => 'El corto más cortante',
        'director' => 'María Martín',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua.'
        ],
        [
        'id' => 2,
        'titulo' => 'Sin más',
        'director' => 'Pepa Pérez',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua.'
        ],
        [
        'id' => 3,
        'titulo' => 'Más o menos',
        'director' => 'Juan Jiménez',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua.'
        ],
        [
        'id' => 4,
        'titulo' => 'Tira pa\' ya',
        'director' => 'Sofía Sofín',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua.'
        ],
        [
        'id' => 5,
        'titulo' => 'Miedo',
        'director' => 'Pepe Parrilla',
        'sinapsis' => 'Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua.'
        ]
        ];
    return view('cortosId', compact('cortos','id'));
})->name("cortosId");

/*Route::get('libros', [LibroController::class, 'index'])
->name("libros");

Route::get('/libros/{id}', [LibroController::class, 'destroy'])
->name('libros.destroy');

Route::get('mod/{id}', [LibroController::class, 'show'])
->name('libros.show');

Route::put('update', [LibroController::class, 'update'])
->name('libros.update');*/

Route::resource('libros', LibroController::class);

Route::resource('autores', AutorController::class);

Route::get('lista', [AutorController::class, 'lista'])->name('autores.lista');
Route::get('apiLista/{id}', [AutorController::class, 'apiLista'])->name('autores.apiLista');
Route::get('apiListaLibros/{id}', [LibroController::class, 'apiLista'])->name('libros.apiLista');