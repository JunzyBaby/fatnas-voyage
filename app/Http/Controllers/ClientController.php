<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::all();
        return view('admin.client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Nom'=>'required|string',
            'Prenom'=>'required|string',
            'Adresse'=>'required|string',
            'Naissance'=>'required|date',
            'Contact'=>'required|string|min:8',
            'Email'=>'required|email',
        ],
        [
            'required'=>'Le champ :attribute est requis',
            'min'=>'Le champ :attribute doit contenir au moin :min caractères',
            'email'=>'Le champ :attribute doit email',
        ]);

        Client::create([
            'NomClient'=>$request->Nom,
            'PrenomClient'=>$request->Prenom,
            'Adresse'=>$request->Adresse,
            'DateNaissClient'=>$request->Naissance,
            'ContactClient'=>$request->Contact,
            'EmailClient'=>$request->Email,
        ]);

        session()->flash('client.create','Client ajouté avec succès');
        return redirect()->route('clients.index');
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
        $client=Client::findOrFail($id);
        return view('admin.client.edit',compact('client'));
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
        $client=Client::findOrFail($id);
        $this->validate($request,[
            'Nom'=>'required|string',
            'Prenom'=>'required|string',
            'Adresse'=>'required|string',
            'Naissance'=>'required|date',
            'Contact'=>'required|string|min:8',
            'Email'=>'required|email',
        ],
        [
            'required'=>'Le champ :attribute est requis',
            'min'=>'Le champ :attribute doit contenir au moin :min caractères',
            'email'=>'Le champ :attribute doit email',
        ]);

        $client->update([
            'NomClient'=>$request->Nom,
            'PrenomClient'=>$request->Prenom,
            'Adresse'=>$request->Adresse,
            'DateNaissClient'=>$request->Naissance,
            'ContactClient'=>$request->Contact,
            'EmailClient'=>$request->Email,
        ]);

        session()->flash('client.update','Modification effectué avec succès!');

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::destroy($id);
        session()->flash('client.delete','Client supprimer avec succès');
        return redirect()->route('clients.index');
    }
}
