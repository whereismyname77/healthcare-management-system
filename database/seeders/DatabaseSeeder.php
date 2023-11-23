<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // \App\Models\User::factory(5)->create();

         $user = User::factory()->create([
         'name' => 'john',
         'email' => 'j@g.c'
         
         ]);

         Listing::factory(6)->create([
         'user_id' => $user->id
         ]);
         // Listing::create([
         //    'title' => 'laravel denior devlpoper' ,
         //    'tags' => 'laravel, javascript',
         //    'company' => 'acme crop' ,
         //    'location' => 'boston, ma' ,
         //    'email' => 'email@any.com' ,
         //    'website' => 'https://www.acme.com' ,
         //    'description' => 'crmentelo alkaryo burfabor la espectora crmentelo alkaryo burfabor la espectora crmentelo alkaryo burfabor la espectora'

         // ]);

         // Listing::create([
         //    'title' => 'somthing somthing' ,
         //    'tags' => 'laravel, javascript' ,
         //    'company' => 'acme crop' ,
         //    'location' => 'boston, ma' ,
         //    'email' => 'email@any.com' ,
         //    'website' => 'https://www.acme.com' ,
         //    'description' => 'crmentelo alkaryo burfabor la espectora 
         //    crmentelo alkaryo burfabor la espectora
         //    crmentelo alkaryo burfabor la espectora
         //    crmentelo alkaryo burfabor la espectora'
         // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
