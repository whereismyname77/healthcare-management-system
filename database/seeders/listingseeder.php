<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class listingseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('listings')->insert([
            'title' => Str::random(10),
            'tags' => Str::random(10),
            'company' => Str::random(10),
            'location' => Str::random(10),
            'email' => Str::random(10).'@email.com',
            'website' => 'https://www.acme.com',
            'description' => Str::random(50)
        ]);
    }
}
