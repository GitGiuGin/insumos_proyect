<?php

use App\Http\Controllers\ClientesCrontroller;
use Illuminate\Support\Facades\Route;
/*Importamos el controlador de la pagina principal 'HomeController'*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Clientes;

Route::get('/', HomeController::class);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/login/registrar', [LoginController::class, 'crear']);

Route::get('/login/{post}', function($post){
    return "imagen numero {$post}";
});

Route::get('/pruebas/index.html', function(){
    return view('pruebas/index.html');
});

/*Route::get('/login/{post}/{category?}', function($post, $category = null){
    if($category){
        return "imagen numero {$post} de la categoria {$category}";
    }
    
    return "imagen numero {$post}";
}); */

/* Route::get('/login/{post}/{category}', function($post, $category){
    return "imagen numero {$post} de la categoria {$category}";
}); */

//Get       vizualizar pagina
//Post
//Put       actualizar 
//Patch     actualizar
//Delete

Route::get('clientes', function(){
    #CREAR NUEVO REGISTRO
    
    /*$registrar = new Clientes;
    
    $registrar -> nombre = 'Nombre PRUEBA 4';
    $registrar -> apellido = 'Apellido prueba 3';
    $registrar -> tipo_documento = 'Tipo Doc prueba 3';
    $registrar -> num_documento = 'Num Doc prueba 3';
    $registrar -> direccion = 'Direccion prueba 3';
    $registrar -> telefono = 'Telefono prueba 3';
    $registrar -> correo = 'Correo prueba 3';
    $registrar -> save();
    return $registrar;*/

    #ACTUALIZAR UN REGISTRO
    /*
    Este codigo es para recuperar con el campo "id", no con otro nombre en la base de datos;
    $actualizar = Clientes::find(4);
    */
    /*Este codigo me perdime recuperar aplicando en where*/
    /*$actualizar = Clientes::where('IdCliente', 7) -> first();

    $actualizar -> nombre = 'Nombre prueba 2';
    $actualizar -> apellido = 'Apellido prueba 2';
    $actualizar -> tipo_documento = 'Tipo Doc prueba 2';
    $actualizar -> num_documento = 'Num Doc prueba 2';
    $actualizar -> direccion = 'Direccion prueba 2';
    $actualizar -> telefono = 'Telefono prueba 2';
    $actualizar -> correo = 'Correo prueba 2';

    $actualizar -> save();

    return $actualizar;*/

    #CONSULTAR REGISTROS
    /*Consultar todos los registros */
    #$consultar = Clientes::all(); /*Obtiene todos los registros*/
    #$consultar = Clientes::get();  /*Obtiene todos los registros*/
    #$consultar = Clientes::where('IdCliente', '>=', 2) -> first();
    #$consultar = Clientes::orderBy('IdCliente', 'desc') 
    #    -> select('nombre', 'apellido', 'telefono', 'correo') /*Muestra campos especificos*/
    #    -> take(2) /*muestra los primeros 2 registros */
    #    -> get(); 
    #return $consultar;

    #ELIMINAR REGISTRO
    /*$eliminar = Clientes::find(6);
    $eliminar -> delete();

    return 'Eliminar correctamente';*/

    $clientes = Clientes::find(1);

    return $clientes -> nombre;
});

Route::get('/clientes/consultas', [ClientesCrontroller::class, 'consultar']);
    #$consultar = Clientes::all(); /*Obtiene todos los registros*/
    #
    #return $consultar;

