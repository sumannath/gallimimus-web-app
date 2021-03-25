<?php

namespace App\Http\Resources\api\v1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\api\v1\ApplicationResource;

class ApplicationCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $applications = $this->applications;

        return [
            'categoryId' => $this->id,
            'categoryName' => $this->name,
            'applicationCount' => count($applications),
            'applications' => ApplicationResource::collection($applications)
        ];
    }
}
