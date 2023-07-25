<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Resume;
use Illuminate\Database\Seeder;
use App\Models\HomeBio;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\HomeBio::factory(1)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // \App\Models\HomeBio::factory
        // Resume::create([
        //     'cv' => 'Ogutu_CV.pdf'
        // ]);

        // $this->call([
        //     BioSeeder::class
        // ]);
    }
}
