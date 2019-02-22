<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Groupe;
class groupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $groupes=\App\Groupe::all();
        return view('ListeGroupe.index',compact('groupes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('ListeGroupe.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $groupe= new \App\Groupe;
        $groupe->libelleGroupe=$request->get('libelleGroupe');
        $groupe->capacite=$request->get('capacite');
         $groupe->save();
        
        return redirect('/groupes')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $groupe = \App\Groupe::find($id);
           return view('ListeGroupe.edit',compact('groupe','id'));
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
         $groupe = new App\Groupe();
        $data = $this->validate($request, [
            'libelleGroupe'=>'required',
            'capacite'=> 'required'
        ]);
        $data['id'] = $id;
        $groupe->updateGroupe($data);

        return redirect('/groupes')->with('success', 'New support groupe has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $groupe = \App\Groupe::find($id);
        $groupe->delete();
        return redirect('/groupes')->with('success','Information has been  deleted');
    }
}
