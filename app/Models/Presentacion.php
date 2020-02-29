<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    protected $table='presentacion';
    protected $primaryKey = 'idPresentacion';
    protected $fillable = ['director','correo','textoPresentacion','textoPresentacion','contacto','mision','vision'];
    protected $guarded = ['idPresentacion'];
}

