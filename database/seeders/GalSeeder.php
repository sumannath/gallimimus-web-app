<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gal;
use App\Models\GalItem;

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
        GalItem::create(['gal_id' => 1, 'application_version_id' => 3]);
        GalItem::create(['gal_id' => 1, 'application_version_id' => 5]);

        Gal::create();
        GalItem::create(['gal_id' => 2, 'application_version_id' => 1]);
        GalItem::create(['gal_id' => 2, 'application_version_id' => 2]);
    }
}
