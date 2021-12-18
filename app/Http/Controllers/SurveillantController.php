<?php

namespace App\Http\Controllers;

use App\Models\Surveillant;
use Illuminate\Http\Request;

class SurveillantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveillants = Surveillant::paginate(10);

        return view('surveillant.index', compact('surveillants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surveillant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surveillant = new Surveillant();
        $surveillant->nom = $request->post('nom');
        $surveillant->prenom = $request->post('prenom');
        $surveillant->age = $request->post('age');
        $surveillant->specialite = $request->post('specialite');
        $surveillant->save();

        return redirect(route('surveillants.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Surveillant $surveillant)
    {
        return view('surveillant.show', compact('surveillant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Surveillant $surveillant)
    {
        return view('surveillant.edit', compact('surveillant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Surveillant $surveillant, Request $request)
    {
        $surveillant->nom = $request->post('nom');
        $surveillant->prenom = $request->post('prenom');
        $surveillant->age = $request->post('age');
        $surveillant->specialite = $request->post('specialite');
        $surveillant->save();

        return redirect(route('surveillants.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surveillant $surveillant)
    {
        $surveillant->delete();

        return back()
            ->with('info', $surveillant->nom . ' a été supprimé avec succée.');
    }
}
