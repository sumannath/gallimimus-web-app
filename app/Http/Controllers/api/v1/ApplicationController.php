<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\api\v1\ApplicationCategoryCollection;
use App\Models\ApplicationCategory;
use App\Models\ApplicationVersion;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function getAppList()
    {
        return new ApplicationCategoryCollection(ApplicationCategory::all());
    }
}
