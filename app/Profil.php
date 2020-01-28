<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = [
        'titre', 'statut','tof', 'url',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
