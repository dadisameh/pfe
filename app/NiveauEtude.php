<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NiveauEtude extends Model
{
      public function affectation()
    {
        return $this->hasMany(class::Affectation);
    }
}
