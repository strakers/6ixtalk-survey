<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fields = ['name'];
        foreach($this->storage_values as $storage_set){
            $package = array_combine($fields, $storage_set);
            DB::table('word_types')->insert( $package );
        }
    }

    private $storage_values = [
        ['uncategorized'],
        ['word'],
        ['phrase'],
        ['utterance'],
    ];
}
