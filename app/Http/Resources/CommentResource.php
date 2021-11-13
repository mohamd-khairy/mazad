<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'id' => $this->id ?? null,
            'user_name' => $this->user->name ?? null,
            'user_image' => isset($this->user->image) ? display_img($this->user->image)  : display_img(null),
            'price' => $this->price ?? null,
            'mazad_id' => $this->mazad_id ?? null,
            'user_id' => $this->user_id ?? null
        ];
    }
}
