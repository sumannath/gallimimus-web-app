<?php

namespace App\Http\Resources\api\v1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;
use App\Http\Resources\api\v1\ApplicationVersionResource;

class ApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'applicationId' => $this->id,
            'name' => $this->name,
            'developer' => $this->developer == null ? '' : $this->developer->name,
            'icon' => $this->icon,
            'website' => $this->website,
            'description' => Str::of($this->description)->limit(100, '...'),
            'versionCount' => count($this->versions),
            'versions' => ApplicationVersionResource::collection($this->versions),
        ];
    }
}
