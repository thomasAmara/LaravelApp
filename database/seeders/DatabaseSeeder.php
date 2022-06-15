<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::create([
            'title' => 'laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme',
            'location' => 'Boston, MA',
            'email' => 'acme@gmail',
            'website' => 'https://www.acme.com',
            'description' => 'lorem isup dolor sit amet consecteur adipisicing elit.Ipsam',
        ]);

        Listing::create([
            'title' => 'Full Stack Developer',
            'tags' => 'laravel, backend',
            'company' => 'Stark industries',
            'location' => 'New York, NY',
            'email' => 'stark@gmail',
            'website' => 'https://www.starkindustries.com',
            'description' => 'lorem isup dolor sit amet consecteur adipisicing elit.Ipsam',
        ]);
    }
}
