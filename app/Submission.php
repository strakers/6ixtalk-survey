<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    //
    protected $fillable = [
        'name',
        'age',
        'gender',
        'location',
        'nationality',
        'ip_address',
    ];

    public function wordPhrases(){
        return $this->hasMany('App\WordPhrase');
    }
}
