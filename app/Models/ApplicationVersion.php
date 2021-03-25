<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ApplicationPlatform;

class ApplicationVersion extends Model
{
    use HasFactory;

    /**
     * Get the platform that the ApplicationVersion belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function platform()
    {
        return $this->belongsTo(ApplicationPlatform::class);
    }

    /**
     * Get the application that owns the ApplicationVersion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
