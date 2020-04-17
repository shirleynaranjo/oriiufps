<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;   

class Noticia extends Model
{
    protected $table='noticia';
    protected $primaryKey = 'idNoticia';
    protected $fillable = ['tituloNoticia','fechaPublicacion','descripcionNoticia','imagen','imagenInicio','video','slug'];
    protected $guarded = ['idNoticia'];
    protected $dates = ['fechaPublicacion'];

    public static function setImagenInicio($imagen, $actual = false)
    {
        if ($imagen) {
            if ($actual) {
                Storage::disk('public')->delete("imagenes/noticias/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $image = Image::make($imagen)->encode('jpg', 80);
            $image->resize(1900, 550, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            Storage::disk('public')->put("imagenes/noticias/$imageName", $image->stream());
            return $imageName;
        } else {
            return false;
        }
    }

    public static function setImagen($imagen, $actual = false)
    {
        if ($imagen) {
            if ($actual) {
                Storage::disk('public')->delete("imagenes/noticias/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $image = Image::make($imagen)->encode('jpg', 80);
            $image->resize(400, 280, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            Storage::disk('public')->put("imagenes/noticias/$imageName", $image->stream());
            return $imageName;
        } else {
            return false;
        }
    }
}
