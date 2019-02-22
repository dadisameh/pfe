<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class niveauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salles=\App\Salle::all();
        return view('ListSalle.index',compact('salles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('ListSalle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $salle= new \App\Salle;
        $salle->numSalle=$request->get('numSalle');
        $salle->capacite=$request->get('capacite');
         $salle->save();
        
        return redirect('/salles')->with('success', 'Information has been added');
    
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
    public function edit($idSalle)
    {
         $salle = \App\Salle::find($idSalle);
        return view('ListSalle.edit',compact('salle','idSalle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idSalle)
    {
         $salle = new \App\Salle();
        $data = $this->validate($request, [
            'numSalle'=>'required',
            'capacite'=> 'required'
        ]);
        $data['idSalle'] = $idSalle;
        $salle->updateSalle($data);

        return redirect('/salles')->with('success', 'New support groupe has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idSalle)
    {  
         $salle = \App\Salle::find($idSalle);
        $salle->delete();
         return redirect('/salles')->with('success','Information has been  deleted');
    }
}
