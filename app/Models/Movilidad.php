<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movilidad extends Model
{
    protected $table='movilidad';
    protected $primaryKey = 'idMovilidad';
    protected $fillable = ['movEstudiantil','movDocente','movExtranjera'];
    protected $guarded = ['idMovilidad'];
}
