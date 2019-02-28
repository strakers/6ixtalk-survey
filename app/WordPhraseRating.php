<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WordPhraseRating extends Model
{
    //
    protected $fillable = [
        'submission_id',
        'word_phrase_id',
        'rating',
        'correction',
        'theme',
        'region',
    ];

    public function submission(){
        return $this->belongsTo('App\Submission');
    }

    public function wordPhrase(){
        return $this->belongsTo('App\WordPhrase');
    }
}
