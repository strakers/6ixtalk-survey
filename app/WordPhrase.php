<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WordPhrase extends Model
{
    //
    protected $fillable = [
        'submission_id',
        'word_type_id',
        'name',
        'meaning',
    ];

    public function type(){
        return $this->belongsTo('App\WordType');
    }

    public function submission(){
        return $this->belongsTo('App\Submission');
    }

    public function ratings(){
        return $this->hasMany('App\WordPhraseRating');
    }

    public function meanings(){
        return $this->hasMany('App\WordPhraseMeaning');
    }
}
