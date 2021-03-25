<?php

namespace App\Http\Resources\api\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationVersionResource extends JsonResource
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
            'applicationName' => $this->application->name,
            'platform' => $this->platform->name,
            'version' => $this->version,
            'releaseDate' => $this->release_date,
            'architechture' => $this->arch,
            'downloadLink' => $this->download_link,
            'silentInstallArgs' => $this->silent_install_args
        ];
    }
}
