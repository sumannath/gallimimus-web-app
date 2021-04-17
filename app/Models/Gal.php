<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gal extends Model
{
    use HasFactory;

    /**
     * Get all the applications for the Gal
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function applications()
    {
        return $this->belongsToMany(Application::class, 'gal_applications', 'gal_id', 'application_id')->withTimestamps();
    }
}
