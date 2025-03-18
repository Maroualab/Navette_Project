<?php

namespace App\Http\Controllers;

use App\Models\ShuttleOffer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ShuttleOfferController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $offers = ShuttleOffer::where('user_id', auth()->id())->get();
        return view('offres.index', compact('offers'));
    }

    public function create()
    {
        return view('offres.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'depart' => 'required|string',
            'arrivee' => 'required|string',
            'heure_depart' => 'required|date_format:H:i',
            'heure_arrivee' => 'required|date_format:H:i|after:heure_depart',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'available_places' => 'required|integer|min:1',
            'description' => 'nullable|string',
        ]);
        $validated['user_id'] = Auth::id();

        ShuttleOffer::create($validated);

        return redirect()
            ->back()
            ->with('success', 'Offre créée avec succès !');
    }

   


}