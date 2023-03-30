<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Trajet;
use App\Models\Zones;
use Illuminate\Http\Request;

class ClientdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zones = Zones::all();
        return view('dashboard',compact('zones'));
        
        return (view('dashboard',compact('regions')));
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
        $client = Client::create($request->all());
        return redirect('dashboard')->with('flash_message','candidat créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getByRegion($zoneId)
    {
        $trajets = Trajet::where('zone_id', $zoneId)->get();
    
        return response()->json($trajets);
    }

    public function getTarif($trajetId)
    {
        $itineraire = Trajet::findOrFail($trajetId);
        $tarif = $itineraire->tarif;
        return response()->json(['tarif' => $tarif]);
    }
}
