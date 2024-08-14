<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscriptions extends Model
{
    use HasFactory;

    public function food(){
        return $this->hasMany(foods::class);
    }
    public function payment(){
        return $this->hasMany(payments::class);
    }
    public function foodStudents(){
        return $this->hasMany(foodStudent::class);
    }
/*     public function payment(){
        return $this->hasOne(foods::class);
    } */
    public function scopeSearch($query, $value){
        $query->where('nombre','like',"%{$value}%")->orWhere('apell_paterno','like',"%{$value}%")->orWhere('apell_materno','like',"%{$value}%");
    }

protected $fillable = ['nombre','apell_paterno','apell_materno', 'fecha_nac','lugar_nac','curp','tipo_sangre','tiene_necesidad_eductiva','cual','nombre_padre_tutor','tiene_tutor','profesion_ocupacion_padre','tel_trabajo_padre','celular_padre','nombre_madre_tutor','tiene_tutora','profesion_ocupacion_madre','tel_trabajo_madre','celular_madre','tel_casa','domicilio','colonia','cp','tel_otro','parentesco_otro','colegiatura'];
}
