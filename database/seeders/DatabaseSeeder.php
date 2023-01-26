<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Sharing;
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
         
        // Make Fake Users
        \App\Models\User::factory(5)->create();

        // Make Fake Bands with their sharing
         \App\Models\Band::factory(5)->create()->each(function($band) {
            Sharing::create([
                'owner_id' => $band->user_id,
                'shared_user' => 2,
                'shared_band' => $band->band_id, 
            ]);
        });;

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
