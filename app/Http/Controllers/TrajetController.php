<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\Zones;
use Illuminate\Http\Request;

class TrajetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zones = Zones::all();
        return view('admin/trajet',compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeTrajet(Request $request)
    {
        $trajet = Trajet::create($request->all());
        return redirect('admin/createTrajet')->with('flash_message','region créé');
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
}
