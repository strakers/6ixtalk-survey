<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WordPhraseMeaning extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'submission_id',
        'word_phrase_id',
        'name',
        'meaning',
        'region',
    ];

    public function submission(){
        return $this->belongsTo('App\Submission');
    }

    public function wordPhrase(){
        return $this->belongsTo('App\WordPhrase');
    }
}
