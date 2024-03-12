<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;

    protected $primarykey="cur_id";
    public $table="cursos";

    public $fillable = [ 
        "cur_titulo",
        "cur_descripcion",
        "cur_grupo",
        "cur_estado"
    ];
    protected $casts = 

}
