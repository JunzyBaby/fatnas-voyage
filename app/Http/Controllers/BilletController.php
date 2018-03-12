<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billet;
use App\Compagnie;
use App\Vol;
use DB;

class BilletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $billets=DB::table('billet')
            ->join('vol','billet.IdVol','=','vol.IdVol')
            ->join('compagnie','vol.IdCompagnie','=','compagnie.IdCompagnie')
            ->select('billet.*','vol.CodeVol','compagnie.NomCompagnie')
            ->get();
        return view('admin.billet.index',compact('billets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vols=DB::table('vol')
            ->join('compagnie','vol.IdCompagnie','=','compagnie.IdCompagnie')
            ->select('compagnie.NomCompagnie','vol.IdVol')
            ->get();

        return view('admin.billet.create',compact('vols'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            ['categorie'=>'required|min:4','prix'=>'required'],
            ['required'=>'Le champ :attribute est requis','min'=>'Le champ :attribute doit avoir au moin :min caractère',
            'numeric'=>'Le champ :attribute doit être un nombre']
        );
        Billet::create([
            'TypeBille'=>$request->categorie,
            'prix'=>$request->prix,
            'IdVol'=>$request->vol,
        ]);
        session()->flash('billet.create','Billet ajouté avec succès');
        return redirect()->route('billets.index');
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
        $billet=Billet::find($id);
        $vols=DB::table('vol')
            ->join('compagnie','vol.IdCompagnie','=','compagnie.IdCompagnie')
            ->select('compagnie.NomCompagnie','vol.IdVol')
            ->get();

        return view('admin.billet.edit',compact('vols','billet'));
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
        $billet=Billet::findOrFail($id);
        $this->validate($request,
            ['categorie'=>'required|min:4','prix'=>'required'],
            ['required'=>'Le champ :attribute est requis','min'=>'Le champ :attribute doit avoir au moin :min caractère',
            'numeric'=>'Le champ :attribute doit être un nombre']
        );
        $billet->update([
            'TypeBille'=>$request->categorie,
            'prix'=>$request->prix,
            'IdVol'=>$request->vol,
        ]);
        
        session()->flash('billet.update','Billet modifié avec succès');
        return redirect()->route('billets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Billet::destroy($id);
        session()->flash('billet.destroy','Billet supprimé avec succès');
        return redirect()->route('billets.index');
    }
}
