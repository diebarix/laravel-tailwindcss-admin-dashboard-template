<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foods extends Model
{
    use HasFactory;


    public function foodStudent(){
        return $this->hasMany(foodStudent::class);
    }

    protected $fillable = [
        'nombre_comida',
        'imagen',
        'fecha_pedido',
    ];

}
