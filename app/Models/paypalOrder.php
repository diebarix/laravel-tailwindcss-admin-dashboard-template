<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paypalOrder extends Model
{
    use HasFactory;

    protected $table = 'paypal_orders';

    // Campos que pueden ser asignados masivamente
    protected $fillable = [
        'user_id',
        'food_student_id',
        'pago',
    ];

    // Relación con el modelo Cliente (si existe)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function food()
    {
        return $this->belongsTo(foods::class);
    }

    public function foodStudent()
    {
        return $this->belongsTo(FoodStudent::class);
    }
}
