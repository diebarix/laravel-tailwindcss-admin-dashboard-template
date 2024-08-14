<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foodStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'food_id', 'inscriptions_id'
    ];

    public function inscription(){
        return $this->belongsTo(inscriptions::class, 'inscriptions_id');
    }
    public function foods(){
        return $this->belongsTo(foods::class, 'food_id');
    }

    public function paypalOrders()
    {
        return $this->hasMany(PaypalOrder::class, 'food_student_id');
    }
}
