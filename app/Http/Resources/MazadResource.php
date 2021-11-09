<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MazadResource extends JsonResource
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
            "details" =>  $this->details ?? null,
            "price" =>  $this->price ?? null,
            "price_min_plus" =>  $this->price_min_plus ?? null,
            "status" =>  $this->status ? true : false,
            'images' => display_img($this->images) ?? null,
            'user' => $this->user ? new UserResource($this->user) : null,
            'category' => $this->category ? new GeneralResource($this->category) : null,
            'comments' => $this->comments ?? null,
            'asks' => $this->asks ?? null,
            'winner' => $this->winner ?? null,
            "from" => $this->from ? date('Y-m-d h:i A', strtotime($this->from)) : null,
            "to" => $this->to ? date('Y-m-d h:i A', strtotime($this->to)) : null,
        ];
    }
}
