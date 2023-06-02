<?php

namespace Database\Seeders;

use App\Models\Synonym;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SynonymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas  = [
            ['name'=>'R27 1/2W RESISTENCIA DE CARBON',
             'product_id'=> 1,     
            ],
            ['name'=>'Admin',
             'product_id'=> 1,     
            ],
        ];
        foreach($datas as $data){
            
            Synonym::create($data);
        }
    }
}
