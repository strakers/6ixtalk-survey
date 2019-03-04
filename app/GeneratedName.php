<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class GeneratedName extends Model
{
    //
    use SoftDeletes;
    //
    protected $fillable = [
        'name',
        'num_used',
    ];

    public function useName(){
        $this->num_used++;
        $this->save();
    }


    public function chooseRandomName(){
        $bounds = DB::table( $this->getTable() )
            ->select(
                DB::raw("MAX(num_used) as maximum"),
                DB::raw("MIN(num_used) as minimum")
            )
            ->get();

        $mid_bound = (($bounds->maximum + $bounds->minimum) / 2);
        $random_id = rand($bounds->minimum, $mid_bound);

        return static::where(
            'num_used', '<=',$random_id
        )
        ->orderBy('id','DESC')
        ->limit(1)
        ->get();
    }
}
