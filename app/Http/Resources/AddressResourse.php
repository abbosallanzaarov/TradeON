<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'street' => $this->street,
            'district' => $this->district,
            'region' => $this->region,
            'home'   => $this->home,
            'created_at' => $this->created_at
        ];
    }
}
