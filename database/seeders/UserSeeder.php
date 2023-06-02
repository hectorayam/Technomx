<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{   
    /** 
    *@return void 
    */
    public function run()
    {
        
        $user1 = User::create([
            'name' => 'Super admin',
            'email' => 'superadmin@admin.com',
            'password'=>bcrypt('superadmin123'),
            
            ]);
        $user1->assignRole('Super Admin');
        
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password'=>bcrypt('admin123'),
            
            ]);
        $user->assignRole('Admin');


        
    }
}