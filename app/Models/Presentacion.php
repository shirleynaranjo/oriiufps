<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Presentacion extends Model
{
    protected $table='presentacion';
    protected $primaryKey = 'idPresentacion';
    protected $fillable = ['director','correo','textoPresentacion','contacto','mision','vision','fotoDirector'];
    protected $guarded = ['idPresentacion'];

    public static function setImagen($imagen, $actual = false)
    {
        if ($imagen) {
            if ($actual) {
                Storage::disk('public')->delete("imagenes/presentacion/director/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $image = Image::make($imagen)->encode('jpg', 80);
            $image->resize(323, 250, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            Storage::disk('public')->put("imagenes/presentacion/director/$imageName", $image->stream());
            return $imageName;
        } else {
            return false;
        }
    }
}

