<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experencia extends Model
{
    protected $table='experiencia';
    protected $primaryKey = 'idExperiencia';
    protected $fillable = ['descripcionExperiencia','enlace'];
    protected $guarded = ['idExperiencia'];
}
