<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
	protected $primaryKey='idSalle';
    protected $fillable = ['idSalle','numSalle', 'capacite'];


    public function updateSalle($data){      
        $salle = $this->find($data['idSalle']);
        $salle->numSalle = $data['numSalle'];
        $salle->capacite = $data['capacite'];
        $salle->save();
        return 1;}
}
