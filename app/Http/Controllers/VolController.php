<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VolFormRequest;
use App\Vol;
use App\Compagnie;
use DB;

class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vols=DB::table('vol')
            ->join('compagnie','vol.IdCompagnie','=','compagnie.IdCompagnie')
            ->select('vol.*','compagnie.NomCompagnie')
            ->get();
        return view('admin.vol.index',compact('vols'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compagnies=Compagnie::all('IdCompagnie','NomCompagnie');
        return view('admin.vol.create',compact('compagnies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VolFormRequest $request)
    {
        Vol::create([
            'CodeVol'=>$request->code,
            'DateDepart'=>$request->depart,
            'DateArrive'=>$request->arrive,
            'NbrePlace'=>$request->place,
            'DureeVol'=>$request->duree,
            'Destination'=>$request->destination,
            'Statut'=>$request->statut,
            'IdCompagnie'=>$request->compagnie
        ]);
        session()->flash('vol.create','Vol ajouté avec success!');
        return redirect()->route('vols.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vol=Vol::findOrFail($id);
        $compagnies=Compagnie::all();
        return view('admin.vol.edit',compact('vol','compagnies'));

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
        $vol=Vol::findOrFail($id);
        $vol->update([
            'CodeVol'=>$request->code,
            'DateDepart'=>$request->depart,
            'DateArrive'=>$request->arrive,
            'NbrePlace'=>$request->place,
            'DureeVol'=>$request->duree,
            'Destination'=>$request->destination,
            'Statut'=>$request->statut,
            'IdCompagnie'=>$request->compagnie
        ]);
        session()->flash('vol.update','Vol modifié avec success!');
        return redirect()->route('vols.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vol::destroy($id);
        session()->flash('vol.delete','Vol supprimé avec succès');
        return redirect()->route('vols.index');
    }
}
