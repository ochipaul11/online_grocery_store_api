<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrdersResource extends JsonResource
{
    public function toArray($request)
    {
        return ['id' => (string)$this->id, //converting the integer into a string
            'grocery' => GroceriesResource::collection($this->groceries),
            'quantity' => $this->quantity,
            'total_price' => $this->total_price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at];
    }
}
