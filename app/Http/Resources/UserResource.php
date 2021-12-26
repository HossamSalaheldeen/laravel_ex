<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'parent_id' => $this->manager_id,
            'parent' => $this->manager ? $this->manager->name : null,
//            'parent' => self::make($this->whenLoaded('manager')),
//            'children' => self::collection($this->whenLoaded('childStaff')),
        ];
    }
}
