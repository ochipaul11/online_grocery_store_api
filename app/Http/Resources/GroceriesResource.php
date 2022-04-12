<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GroceriesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return ['id'=>$this->id,
            'name'=>$this->name,
            'favorited'=>$this->favorited,
            'quantity_ordered'=>$this->quantity_ordered,
            'price'=>$this->price,
            'description'=>$this->description,
            'quantity_in_stock'=>$this->quantity_in_stock,
            'image'=>$this->image,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at
        ];
    }
}
