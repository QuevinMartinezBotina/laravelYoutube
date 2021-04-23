<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /* protected $fillable = ['name', 'descripcion', 'categoria'];  */ /* En este le decimos que campos guardar he ignorar los protegidos
     porque son pocos*/

    protected $guarded = []; /* Pero en este, le decimos solo cual proteger, esto nos sirve en caso de ser muchos*/
}
