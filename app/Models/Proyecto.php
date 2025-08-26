<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    protected $table = 'cat_proyectos';
    protected $primaryKey = 'idProtecto';
    protected $fillable = ['nombreProyecto', 'descripcionproyecto', 'eliminado'];

    public static function getActiveProjects()
    {
        return self::where('eliminado', 0)->orderBy('nombreProyecto')->get();
    }
}
