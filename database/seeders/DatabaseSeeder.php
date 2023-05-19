<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Contact;
use App\Models\SocialMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // Contact::create([
        //     'email' => 'demo@gmail.com',
        //    ]);
        Admin::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make(123456789),
            

        ]);
        
        
    }
}
