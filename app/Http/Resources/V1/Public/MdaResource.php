<?php

namespace App\Http\Resources\V1\Public;

use Illuminate\Http\Resources\Json\JsonResource;

class MdaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'mda_name' => $this->mda_name
        ];
    }
}
