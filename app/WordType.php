<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WordType extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function wordPhrases(){
        return $this->hasMany('App\WordPhrase');
    }
}
