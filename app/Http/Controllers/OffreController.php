<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Http\Requests\StoreOffreRequest;
use App\Http\Requests\UpdateOffreRequest;
use App\Models\ShuttleOffer;
use Illuminate\Validation\Rule;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offres = ShuttleOffer::all(); 
        return view('home', compact('offres'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOffreRequest $request)
    {
        $validated = $request->validate([
            'depart' => 'required|string',
            'arrivee' => 'required|string',
            'heure_depart' => 'required|date_format:H:i', 
            'heure_arrivee' => 'required|date_format:H:i',
            'date_debut' => 'required|date|date_format:Y-m-d', 
            'date_fin' => 'required|date|date_format:Y-m-d',
            'available_places' => 'required|integer|min:1', 
            'description' => 'required|string',
        ]);
          Offre::create($validated);
          return redirect()->route('offres.index')
            ->with('success','Offre created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offre $offre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offre $offre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOffreRequest $request, Offre $offre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offre $offre)
    {
        //
    }
}
