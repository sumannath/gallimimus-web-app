<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApplicationVersion;

class ApplicationVersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicationVersion::create([
            'application_id' => 1,
            'platform_id' => 1,
            'version' => '2.10.22',
            'release_date' => '2020-10-04',
            'download_link' => 'https://download.gimp.org/mirror/pub/gimp/v2.10/windows/gimp-2.10.22-setup.exe',
            'silent_install_args' => '/VERYSILENT /NORESTART /ALLUSERS']
        );

        ApplicationVersion::create([
            'application_id' => 2,
            'platform_id' => 1,
            'version' => '7.9.4',
            'release_date' => '2021-03-15',
            'arch' => 'x86',
            'download_link' => 'https://github.com/notepad-plus-plus/notepad-plus-plus/releases/download/v7.9.4/npp.7.9.4.Installer.exe',
            'silent_install_args' => '/S']
        );

        ApplicationVersion::create([
            'application_id' => 2,
            'platform_id' => 1,
            'version' => '7.9.4',
            'release_date' => '2021-03-15',
            'arch' => 'x64',
            'download_link' => 'https://github.com/notepad-plus-plus/notepad-plus-plus/releases/download/v7.9.4/npp.7.9.4.Installer.x64.exe',
            'silent_install_args' => '/S']
        );

        ApplicationVersion::create([
            'application_id' => 3,
            'platform_id' => 1,
            'version' => '19.00',
            'release_date' => '2019-02-21',
            'arch' => 'x86',
            'download_link' => 'https://www.7-zip.org/a/7z1900.exe',
            'silent_install_args' => '/S']
        );

        ApplicationVersion::create([
            'application_id' => 3,
            'platform_id' => 1,
            'version' => '19.00',
            'release_date' => '2019-02-21',
            'arch' => 'x64',
            'download_link' => 'https://www.7-zip.org/a/7z1900-x64.exe',
            'silent_install_args' => '/S']
        );
    }
}
