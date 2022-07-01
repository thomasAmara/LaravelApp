<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = User::factory()->create([
            'name' => 'Paul Deumi',
            'email' => 'john@gmail.com'
        ]);

        Listing::create([
            'user_id' => $user->id,
            'title' => 'laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme',
            'location' => 'Boston, MA',
            'email' => 'acme@gmail',
            'website' => 'https://www.acme.com',
            'description' => 'lorem isup dolor sit amet consecteur adipisicing elit.Ipsam',
        ]);

        Listing::create([
            'user_id' => $user->id,
            'title' => 'Full Stack Developer',
            'tags' => 'laravel, backend',
            'company' => 'Stark industries',
            'location' => 'New York, NY',
            'email' => 'stark@gmail',
            'website' => 'https://www.starkindustries.com',
            'description' => 'lorem isup dolor sit amet consecteur adipisicing elit.Ipsam',
        ]);

        Listing::create([
            'user_id' => $user->id,
            'title' => 'Frontend Developer',
            'tags' => 'React, JavaScript',
            'company' => 'Hulu',
            'location' => 'Detroit, MI',
            'email' => 'hulu@gmail',
            'website' => 'https://www.huluindustries.com',
            'description' => 'lorem isup dolor sit amet consecteur adipisicing elit.Ipsam',
        ]);

        Listing::create([
            'user_id' => $user->id,
            'title' => 'Django Developer',
            'tags' => 'Django, backend',
            'company' => 'Stark industries',
            'location' => 'Toronto, CA',
            'email' => 'stark@gmail',
            'website' => 'https://www.starkindustries.com',
            'description' => 'lorem isup dolor sit amet consecteur adipisicing elit.Ipsam',
        ]);

        Listing::create([
            'user_id' => $user->id,
            'title' => 'Full Stack Developer',
            'tags' => 'laravel,Django,ReactJS, backend',
            'company' => 'Avira',
            'location' => 'Houston, TX',
            'email' => 'stark@gmail',
            'website' => 'https://www.avira.com',
            'description' => 'lorem isup dolor sit amet consecteur adipisicing elit.Ipsam',
        ]);


        Listing::create([
            'user_id' => $user->id,
            'title' => 'Mobile Developer',
            'tags' => 'React Native',
            'company' => 'Anlo industries',
            'location' => 'New York, NY',
            'email' => 'stark@gmail',
            'website' => 'https://www.anlokindustries.com',
            'description' => 'lorem isup dolor sit amet consecteur adipisicing elit.Ipsam',
        ]);
    }
}
