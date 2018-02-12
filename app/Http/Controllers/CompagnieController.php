<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Compagnie;
use App\Http\Requests\CompagnieFormRequest;

class CompagnieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compagnies= Compagnie::all();
        return view('admin.compagnie.index',compact('compagnies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.compagnie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompagnieFormRequest $request)
    {
        Compagnie::create([
            'CodeCompagnie'=>$request->code,
            'NomCompagnie'=>$request->nom,
            'logo'=>$request->logo->store('image'),
           ]);

        Session()->flash('compagnie','Compagnie ajoutée avec succes');

        return redirect()->route('compagnies.index');
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
        $compagnie=Compagnie::findOrFail($id);
        return view('admin.compagnie.edit',compact('compagnie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompagnieFormRequest $request, $id)
    {
        $compagnie=Compagnie::findOrFail($id);
        $compagnie->update([
            'CodeCompagnie'=>$request->code,
            'NomCompagnie'=>$request->nom,
            'logo'=>$request->logo->store('image'),
           ]);

        Session()->flash('compagnieSuccess','Compagnie modifié avec succes');

        return redirect()->route('compagnies.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Compagnie::destroy($id);
        return redirect()->route('compagnies.index');
    }
}
