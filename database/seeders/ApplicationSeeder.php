<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Application;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Application::create(['name' => 'GIMP', 'icon' => 'https://www.gimp.org/images/frontpage/wilber-big.png', 'website' => 'https://www.gimp.org/', 'application_category_id' => 4]);
        Application::create(['name' => 'Notepad++', 'icon' => 'https://notepad-plus-plus.org/images/logo.svg', 'website' => 'https://notepad-plus-plus.org/', 'application_category_id' => 7]);
        Application::create(['name' => '7-Zip', 'icon' => 'https://www.7-zip.org/7ziplogo.png', 'website' => 'https://www.7-zip.org/', 'application_category_id' => 3]);
    }
}
