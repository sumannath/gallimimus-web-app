<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApplicationPlatform;

class ApplicationPlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicationPlatform::create(['name' => 'Windows']);
    }
}
