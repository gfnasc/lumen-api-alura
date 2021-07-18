<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Serie;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Serie::insert([
            'name' => 'This is Us'
        ]);

        Serie::insert([
            'name' => 'American Gods'
        ]);

        Serie::insert([
            'name' => 'Masterchef'
        ]);

        Serie::insert([
            'name' => 'Mr. Robot'
        ]);

        Serie::insert([
            'name' => 'Black Mirror'
        ]);

        Serie::insert([
            'name' => 'Breaking Bad'
        ]);

        Serie::insert([
            'name' => 'DOM'
        ]);

        Serie::insert([
            'name' => 'Stranger Things'
        ]);

        Serie::insert([
            'name' => 'Lost'
        ]);
    }
}
