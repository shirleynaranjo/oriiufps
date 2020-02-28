<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $table='convocatoria';
    protected $primaryKey = 'idConvocatoria';
    protected $fillable = ['nombreConvocatoria','oferenteConvocatoria','vigenciaConvocatoria','informacionConvocatoria','estadoConvocatoria'];
    protected $guarded = ['idConvocatoria'];
}
