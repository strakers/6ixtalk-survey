<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneratedNameSeeder extends Seeder
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
            $fields = ['name'];
            $package = array_combine($fields,$storage_set);
            DB::table('generated_names')->insert( $package );
        }
    }

    private $storage_values = [
        ['Adebola'],
        ['A-star'],
        ['B'],
        ['Biggs'],
        ['Bones'],
        ['C'],
        ['Cash'],
        ['CJ'],
        ['D'],
        ['Dani'],
        ['Dez'],
        ['E-money'],
        ['El'],
        ['Em'],
        ['Flav'],
        ['G'],
        ['Goku'],
        ['Gwey'],
        ['Hala'],
        ['Homes'],
        ['Holmes'],
        ['J'],
        ['Jade'],
        ['Jase '],
        ['Jay'],
        ['Jazz'],
        ['Jo'],
        ['J-star'],
        ['Kam'],
        ['Kumil'],
        ['Lee'],
        ['Leeroy'],
        ['Link'],
        ['M'],
        ['Min'],
        ['Money'],
        ['Nay'],
        ['O-dogg'],
        ['P'],
        ['Pricilla'],
        ['Q'],
        ['Red'],
        ['Ree'],
        ['Reggie'],
        ['Ro'],
        ['Sam'],
        ['Samantha'],
        ['Sunil'],
        ['Sunny'],
        ['T'],
        ['Toni'],
        ['Vince'],
        ['VR'],
        ['Winston'],
        ['X'],
        ['Yonis'],
        ['Z'],
        ['Zelda'],
    ];
}
