<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\ApplicationCategory  ;
use App\Models\Gal;
use App\Models\Setting;

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
}
