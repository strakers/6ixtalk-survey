<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WordType extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'name',
    ];

    public function wordPhrases(){
        return $this->hasMany('App\WordPhrase');
    }
}
