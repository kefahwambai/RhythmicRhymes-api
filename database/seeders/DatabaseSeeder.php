<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Poem;
use App\Models\Feedback;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    //     $poems =Poem::factory(6)->create();

    //    foreach ($poems as $poem) {
    //         Feedback::factory()->create([
    //             'poem_id' => $poem->id,
    //         ]);
    //    }

        Poem::factory(6)->create();

        Feedback::factory(6)->create();
    }

}
