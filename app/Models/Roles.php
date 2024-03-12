<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;e

class Roles extends Model
{
    use HasFactory;
    public $table="roles";
    protected $primaryKey="rol_id";

    public $fillable =[
     'rol_decripcion'
    ];

    public $cast =
    ['rol_descripcion'=>'string']; 


}