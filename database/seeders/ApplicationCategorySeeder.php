<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApplicationCategory;

class ApplicationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicationCategory::create(['name' => 'Audio Editors']);
        ApplicationCategory::create(['name' => 'File Sharing']);
        ApplicationCategory::create(['name' => 'Utilities']);
        ApplicationCategory::create(['name' => 'Graphics Apps']);
        ApplicationCategory::create(['name' => 'Multimedia']);
        ApplicationCategory::create(['name' => 'Video Editors']);
        ApplicationCategory::create(['name' => 'Text Editors']);
    }
}
