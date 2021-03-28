<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public static function getValue($key)
    {
        $setting = Setting::where('key', $key)->first();
        switch($setting->type)
        {
            case 'int':
                return $setting->int_value;

            case 'string':
                return $setting->string_value;
        }        
    }
}
