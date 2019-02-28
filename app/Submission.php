<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Submission extends Model
{
    use SoftDeletes;
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
