<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionGroup extends Model
{
    //
    protected $fillable = [
        'name',
        'sort_order',
    ];

    public function questions(){
        return $this->hasMany('App\Question');
    }
}
