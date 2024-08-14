<?php

namespace App\Http\Controllers;

use App\Models\inscriptions;
use Illuminate\Http\Request;

class InscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscription = inscriptions::latest()->first();

        return view('pages.dashboard.inscripcion', compact('inscription'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(inscriptions $inscriptions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inscriptions $inscriptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inscriptions $inscriptions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inscriptions $inscriptions)
    {
        //
    }
}
