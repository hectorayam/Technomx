<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Resistencias',

        ];
        foreach($categories as $category){
            Category::create([
                'name' => $category,
            ]);
        }

        $datas = [
           [ 'name'=>'Carbón',
            'category_id' => 1,
        ],
        [ 'name'=>'Cerámica',
            'category_id' => 1,
        ],
        ];
        foreach($datas as $data){
            
            Subcategory::create($data);
        }

        
           
    }
    
}
