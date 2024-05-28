<?php

use Illuminate\Support\Facades\Route;
/*Importamos el controlador de la pagina principal 'HomeController'*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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
