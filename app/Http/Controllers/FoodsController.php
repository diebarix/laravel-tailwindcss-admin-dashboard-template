<?php

namespace App\Http\Controllers;

use App\Models\foods;
use App\Models\foodStudent;
use App\Models\paypalOrder;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $refrigerio = foods::latest()->first();
        $paypalOrder = paypalOrder::with(['user', 'foodStudent.foods', 'foodStudent.inscription'])
        ->orderBy('id', 'desc')
        // ->latest()
        ->firstOrFail();

        // $latestFood = foods::latest()->first();
        $latestFood = foods::orderBy('id', 'desc')->first();

        return view('pages.dashboard.refrigerios', compact('paypalOrder', 'latestFood'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Obtener los días seleccionados del formulario
        $selectedDays = $request->input('days', []);

        // Inicializar la suma
        $totalSum = 0;

        // Calcular la suma basada en los días seleccionados
        foreach ($selectedDays as $day) {
            if (in_array($day, ['lunes', 'martes', 'miercoles', 'jueves', 'viernes'])) {
                $totalSum += 35; // Sumamos 20 por cada día seleccionado
            }
        }

        $foodStudent = foodStudent::updateOrCreate(
            ['inscriptions_id' => $request->input('inscriptions_id')], // Aquí asumimos que tienes el ID de inscripciones en el request
            [
                'lunes' => in_array('lunes', $selectedDays),
                'martes' => in_array('martes', $selectedDays),
                'miercoles' => in_array('miercoles', $selectedDays),
                'jueves' => in_array('jueves', $selectedDays),
                'viernes' => in_array('viernes', $selectedDays),
                'food_id' => $request->input('food_id'), // Asumiendo que este ID también se pasa en el request
            ]
        );

        // Procesar la suma o realizar otras acciones
        // Puedes guardar la suma en la base de datos o en la sesión, etc.

        // Ejemplo de retorno de la suma a la vista (opcional)
        return redirect()->back()->with('selectedDays', $selectedDays)->with('totalSum', $totalSum);
    }

    /**
     * Display the specified resource.
     */
    public function show(foods $foods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(foods $foods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, foods $foods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(foods $foods)
    {
        //
    }
}
