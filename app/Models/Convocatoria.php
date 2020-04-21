<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Convocatoria extends Model
{
    protected $table='convocatoria';
    protected $primaryKey = 'idConvocatoria';
    protected $fillable = ['nombreConvocatoria','oferenteConvocatoria','vigenciaConvocatoria','informacionConvocatoria','estadoConvocatoria'];
    protected $guarded = ['idConvocatoria'];

    public static function setArchivo($archivo, $actual = false)
    {
        if ($archivo){
            if($actual){
                Storage::disk('public')->delete("archivos/convocatorias/$actual");
            }
            $fileName = Str::random(20) . '.pdf';
            Storage::disk('public')->put("archivos/convocatorias/$fileName",$archivo);
            return $fileName;
        }else {
            return false;
        }
    }
}
