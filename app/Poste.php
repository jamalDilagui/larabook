<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    protected $fillable = [
        'description', 'image',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
