<?php

namespace App\Http\Controllers;

use App\Http\Controllers\api\v1\GalController;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\ApplicationCategory  ;
use App\Models\Gal;
use App\Models\Setting;
use Ixudra\Curl\Facades\Curl;

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

        $json = Curl::to(url("api/v1/gals/{$gal->id}"))->get();
        dd($json);

    }
}
