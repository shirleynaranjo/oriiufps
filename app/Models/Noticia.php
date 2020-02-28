<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table='noticia';
    protected $primaryKey = 'idNoticia';
    protected $fillable = ['tituloNoticia','fechaPublicacion','descripcionNoticia','imagen','video'];
    protected $guarded = ['idNoticia'];
}
