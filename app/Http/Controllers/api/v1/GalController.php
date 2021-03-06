<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\api\v1\ApplicationCollection;
use App\Models\Gal;

class GalController extends Controller
{
    public function getAppList($id)
    {
        $gal = Gal::findOrFail($id);
        return new ApplicationCollection($gal->applications);
    }
}
