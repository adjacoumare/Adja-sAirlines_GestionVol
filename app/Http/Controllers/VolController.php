<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vol;

class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vols = Vol::all();

    return view('index', compact('vols'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code_vol' => 'required|max:255',
            'date_depart' => 'required',
            'heure_depart' => 'required',
            'classe_A' => 'required',
            'classe_B' => 'required',
            'prix_classe_A' => 'required',
            'prix_classe_B' => 'required',
        ]);
    
        $vol = Vol::create($validatedData);
    
        return redirect('/vols')->with('success', 'VOL CREER AVEC SUCCES');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vols = Vol::findOrFail($id);
        return view('show', compact('vols'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vol = Vol::findOrFail($id);

    return view('edit', compact('vol'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'code_vol' => 'required',
            'date_depart' => 'required',
            'heure_depart' => 'required',
            'classe_A' => 'required',
            'classe_B' => 'required',
            'prix_classe_A' => 'required',
            'prix_classe_B' => 'required',
        ]);
    
        Vol::whereId($id)->update($validatedData);
    
        return redirect('/vols')->with('success', 'VOL MISE A JOUR AVEC SUCCESS');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vol = Vol::findOrFail($id);
        $vol->delete();
    
        return redirect('/vols')->with('success', 'VOL SUPPRIMER AVEC SUCCES');
    }
}
