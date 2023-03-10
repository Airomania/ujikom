<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Models\User();
        $admin->name ="Admin Project";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt("rahasia");
        $admin->save();
        
        $guest = new \App\Models\User();
        $guest->name ="guest Project";
        $guest->email = "guest@gmail.com";
        $guest->password = bcrypt("12345678");
        $guest->save();
        
        
    
    }
}
