<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table='evento';
    protected $primaryKey = 'idEvento';
    protected $fillable = ['tituloEvento','lugarEvento','fechaEvento','horaEvento','descripcionEvento','informacionEvento','imagenMiniatura'];
    protected $guarded = ['idEvento'];
}