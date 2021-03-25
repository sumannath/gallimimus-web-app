<?php

namespace App\Http\Resources\api\v1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ApplicationVersionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [            
            'applicationCount' => count($this->collection),
            'applications' => $this->collection
        ];
    }
}
