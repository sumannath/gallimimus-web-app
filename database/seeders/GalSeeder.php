<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gal;
use App\Models\GalApplication;

class GalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gal::create();
        GalApplication::create(['gal_id' => 1, 'application_id' => 1]);
        GalApplication::create(['gal_id' => 1, 'application_id' => 2]);

        Gal::create();
        GalApplication::create(['gal_id' => 2, 'application_id' => 2]);
        GalApplication::create(['gal_id' => 2, 'application_id' => 3]);
    }
}
