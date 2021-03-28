<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleAndPermissionSeeder::class,
            ApplicationPlatformSeeder::class,
            ApplicationCategorySeeder::class,
            ApplicationSeeder::class,
            ApplicationVersionSeeder::class,
            UserSeeder::class,
            GalSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
