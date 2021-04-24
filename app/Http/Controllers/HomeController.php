<?php

namespace App\Http\Controllers;

use App\Http\Controllers\api\v1\GalController;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\ApplicationCategory  ;
use App\Models\Gal;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $data['applicationCount'] = Application::count();
        $data['configsCount']     = Gal::count();
        $data['installCount']     = $data['applicationCount'] * $data['configsCount'];
        $data['downloadsCount']   = setting('site.download_count');
        return view('home', $data);
    }

    public function createPackage()
    {
        $data['applicationCategories'] = ApplicationCategory::all();
        return view('createPackage', $data);
    }

    public function downloadGal(Request $request)
    {
        $apps = $request->input('apps');

        //Create a new gal
        $gal = new Gal;
        $gal->save();
        $gal->applications()->attach($apps);

        $fileTime = time();
        $jsonFileName = 'appsettings.' . $fileTime . '.json';
        $data['url'] = route('gals.getAppList',$gal->id);
        $fileContents = json_encode($data, JSON_PRETTY_PRINT);
        Storage::disk('local')->put($jsonFileName, $fileContents);
        $data['settingsFile'] = $jsonFileName;
        $data['fileTime'] = $fileTime;

        $nsiFileName = 'setup.' . $fileTime . '.nsi';
        Storage::disk('local')->put($nsiFileName, view('setup',$data)->render());

        $process = new Process(['makensis', $nsiFileName]);
        $process->setWorkingDirectory(storage_path('app'));
        $process->run();

        return Storage::disk('local')->download('gallimimus'.$fileTime.'.exe','gallimimus.exe');
    }
}
