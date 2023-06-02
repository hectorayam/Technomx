<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Synonym;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        $this->call([
        RoleSeeder::class,
        PermissionSeeder::class,
        RoleHasPermissionSeeder::class,
        UserSeeder::class,
        StatusSeeder::class,
        CategoriesSeeder::class,
        ProductSeeder::class,
        SynonymSeeder::class,
       
    ]);
    }
}
