<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilLomba extends Model
{
    public function competition(){
        return $this->belongsTo('App\Competition','competition_id');
    }
}
