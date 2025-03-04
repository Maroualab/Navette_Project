<?php
namespace App\Http\Controllers;

use App\Models\ShuttleOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShuttleOfferController extends Controller
{
    private function checkRole()
    {
        if (!Auth::check() || Auth::user()->role !== 'transport_company') {
            return redirect('/')->with('error', 'Vous n\'avez pas les droits pour accéder à cette page.');
        }
    }

    public function create()
    {
        $this->checkRole(); 
        return view('offers.create');
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
            'equipements' => 'array',
            'equipements.*' => 'in:climatisation,wifi,prises,usb,toilettes,tv'
        ]);

        // Associate with logged-in user
        $validated['user_id'] = auth()->id();

        ShuttleOffer::create($validated);

        return redirect()
            ->route('offers.show')
            ->with('success', 'Offre créée avec succès!');
    }
}
