<?php

namespace Database\Seeders;

use App\Models\Bio;
use Illuminate\Database\Seeder;

class BioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // This seeder will create the original Bio data
        Bio::create([
            'name' => 'Ogutu',
            'picture' => 'test.jpg',
            'about' => 'test about'
        ]);
    }
}
