<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vol;
use App\Billet;
use App\Compagnie;
use App\Client;
use App\Reservation;
use Nexmo;
use DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations=DB::table('reservation')
            ->join('client','reservation.IdClient','=','client.IdClient')
            ->join('vol','reservation.IdVol','=','vol.IdVol')
            ->select('reservation.*','vol.*','client.*')
            ->get();

        return view('admin.reservation.index',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['Nom'=>'required|min:3','Prenom'=>'required|min:4','Naissance'=>'required|date','Adresse'=>'required|min:3','Telephone'=>'required|min:8','Email'=>'required|email','Place'=>'required|integer'],['required'=>'Le champ :attribute est requis','min'=>'le champ :attribute doit contenir au moin :min caractères']);

        $vol=Vol::find($request->IdVol);
        $placeDispo=0;

        if($vol)
        {
            $placeDispo=$vol->NbrePlace-$request->Place;

            if ($placeDispo<0)
            {
                session()->flash('reservation.erreur','Le nombre limite de place est atteint!');
                return redirect()->route('reservation_path');
            }
            else
            {
                Client::create([
                'NomClient'=>$request->Nom,
                'PrenomClient'=>$request->Prenom,
                'Adresse'=>$request->Adresse,
                'DateNaissClient'=>$request->Naissance,
                'ContactClient'=>$request->Telephone,
                'EmailClient'=>$request->Email,
            ]);


            $client=Client::where('EmailClient',$request->Email)->first();
            
            Reservation::create([
                'DateReservation'=>date('Y-m-d H:m:s'),
                'NbrPlace'=>$request->Place,
                'IdClient'=>$client->IdClient,
                'IdVol'=>$request->IdVol,
            ]);
            $vol->update(['NbrePlace'=>$placeDispo]);

                                   
            session()->flash('reservation.create','Reservation Effectuée avec succès');

            return redirect()->route('reservation_path');
            }

            
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.register',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::destroy($id);
        session()->flash('reservation.delete','Reservation supprimer avec succès!');
        return redirect()->route('reservations.index');

    }

    public function recherche($request)
    {
        $vols=Vol::where('Destination',$request('destination'));
        if ($vols)
        {
            return view('user.reservation',compact('vols'));
        }
        else
        {
            session()->flash('destination.recherche','Aucune destination correspondante');
            return view('user.reservation');
        }
    }
}
