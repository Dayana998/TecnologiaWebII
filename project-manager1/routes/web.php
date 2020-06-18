<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function(){
	return "hola desde la pagina de inicio";
});
Route::get('contacto', function(){
	return "hola desde la pagina de contacto";
});
Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
	return "saludos ". $nombre;
});*/

/*Route::get('contactanos', function(){
	return "seccion de contactos";
})->name('contactos');
Route::get('/', function(){
	echo "<a href='" . route('contactos') ."'>Contacto 1</a><br>";
	echo "<a href='" . route('contactos') ."'>Contacto 2</a><br>";
	echo "<a href='" . route('contactos') ."'>Contacto 3</a><br>";
	echo "<a href='" . route('contactos') ."'>Contacto 4</a><br>";
	echo "<a href='" . route('contactos') ."'>Contacto 5</a><br>";
});*/

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::resource('portafolio', 'ProjectController')->names('projects')->parameters(['portafolio' => 'project']);
/*Route::get('portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');*/

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');


Auth::routes(['register'=>false]);

//Route::get('/home', 'HomeController@index')->name('home');
