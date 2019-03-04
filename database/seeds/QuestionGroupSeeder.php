<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach($this->storage_values as $storage_set){
            $fields = ['name','sort_order'];
            $package = array_combine($fields, $storage_set);
            DB::table('question_group')->insert( $package );
        }
    }

    private $storage_values = [
        ['Personal',1],
        ['Corrections',2],
        ['Additions',3],
    ];
}
