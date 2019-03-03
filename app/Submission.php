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
        'generated_name_id',
        'age',
        'gender',
        'location',
        'nationality',
        'ip_address',
    ];

    public function wordPhrases(){
        return $this->hasMany('App\WordPhrase');
    }

    public function generatedName(){
        return $this->belongsTo('App\GeneratedName');
    }

    public function isGenerated(){
        return !is_null($this->generated_name_id);
    }
}
