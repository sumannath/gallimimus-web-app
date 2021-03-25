<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ApplicationCategory;
use App\Models\ApplicationDeveloper;
use App\Models\ApplicationVersion;

class Application extends Model
{
    use HasFactory;

    /**
     * Get the category that the Application belongs
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(ApplicationCategory::class);
    }

    /**
     * Get the developer that bui;t the Application
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function developer()
    {
        return $this->belongsTo(ApplicationDeveloper::class);
    }

    /**
     * Get all of the versions fplication
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function versions()
    {
        return $this->hasMany(ApplicationVersion::class);
    }
}
