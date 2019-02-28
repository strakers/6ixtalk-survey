<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionGroup extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'name',
        'sort_order',
    ];

    public function questions(){
        return $this->hasMany('App\Question');
    }
}
