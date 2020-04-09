<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class Evento extends Model
{
    protected $table = 'evento';
    protected $primaryKey = 'idEvento';
    protected $fillable = ['tituloEvento', 'lugarEvento', 'fechaEvento', 'horaEvento', 'descripcionEvento', 'imagen', 'archivoPDF', 'estadoEvento', 'imagenMiniatura'];
    protected $guarded = ['idEvento'];

    protected $attributes = [
        'estadoEvento' => 1,
    ];

    public static function setImagenMiniatura($imagen, $actual = false)
    {
        if ($imagen) {
            if ($actual) {
                Storage::disk('public')->delete("imagenes/eventos/miniaturas/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $image = Image::make($imagen)->encode('jpg', 80);
            $image->resize(262, 100, function ($constraint) {
                $constraint->upsize();
            });
            Storage::disk('public')->put("imagenes/eventos/miniaturas/$imageName", $image->stream());
            return $imageName;
        } else {
            return false;
        }
    }

    public static function setImagen($imagen, $actual = false)
    {
        if ($imagen) {
            if ($actual) {
                Storage::disk('public')->delete("imagenes/eventos/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $image = Image::make($imagen)->encode('jpg', 80);
            $image->resize(720, function ($constraint) {
                $constraint->upsize();
            });
            Storage::disk('public')->put("imagenes/eventos/$imageName", $image->stream());
            return $imageName;
        } else {
            return false;
        }
    }

    public static function setArchivo($archivo, $actual = false)
    {
        if ($archivo){
            if($actual){
                Storage::disk('public')->delete("archivos/eventos/$actual");
            }
            $fileName = Str::random(20) . '.pdf';
            Storage::disk('public')->put("archivos/eventos/$fileName",$archivo);
            return $fileName;
        }else {
            return false;
        }
    }
}
