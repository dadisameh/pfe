<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
     protected $fillable = ['libelleGroupe', 'capacite'];

    public function saveGroupe($data)
{
}
public function updateGroupe($data)
{ $groupe = $this->find($data['id']);
        $groupe->libelleGroupe = $data['libelleGroupe'];
        $groupe->capacite = $data['capacite'];
        $groupe->save();
        return 1;
      
}
}
