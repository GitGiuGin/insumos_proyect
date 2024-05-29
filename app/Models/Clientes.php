<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $table = 'clientes';
    protected $primaryKey = 'IdCliente';

    #MUTADORES
    protected function nombre(): Attribute
    {
        return Attribute::make(
            set: function($value) #Ingresa el valor a la BD
            {
                return strtolower($value); #Convierte todo el texto a minuscula
            },
            get: function($value) #Recupera el valor de la BD
            {
                return ucfirst($value); #Convierte la primera letra del texto en mayuscula
            }
        );  
    }
}
