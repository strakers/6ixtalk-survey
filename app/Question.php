<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = [
        'question_group_id',
        'name',
        'question',
        'question_type',
        'sort_order',
    ];

    public function group(){
        return $this->belongsTo('App\QuestionGroup');
    }
}
