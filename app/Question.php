<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;
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
