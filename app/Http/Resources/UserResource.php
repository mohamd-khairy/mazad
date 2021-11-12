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
            "id" =>  $this->id ?? null,
            "name" =>  $this->name ?? null,
            "email" =>  $this->email ?? null,
            "phone" =>  $this->phone ?? null,
            "gender" =>  $this->gender ?? null,
            "birth_date" => $this->birth_date ? date('Y-m-d', strtotime($this->birth_date)) : null,
            "image" => display_img(null)
        ];
    }
}
