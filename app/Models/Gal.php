<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gal extends Model
{
    use HasFactory;

    /**
     * Get all of the items for the Gal
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany(GalItem::class);
    }

    /**
     * The versions that belong to the Gal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function versions()
    {
        return $this->belongsToMany(ApplicationVersion::class, 'gal_items');
    }
}
