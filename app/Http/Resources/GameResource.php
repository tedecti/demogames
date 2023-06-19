<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed> 
     */
    public function toArray(Request $request): array
    {
        return [
            'slug'=> $this->slug,
            'title'=> $this->title,
            'description'=> $this->description,
            'thumbnail'=> $this->thumbnail,
            'uploadTimestamp'=> $this->latestVersion->version,
            'author'=> $this->user->username,
        ];
        return parent::toArray($request);
    }
}
