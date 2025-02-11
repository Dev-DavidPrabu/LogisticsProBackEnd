<?php

namespace App\Http\Resources\Status;

use Illuminate\Http\Resources\Json\JsonResource;

class StatusResource extends JsonResource
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
            'id' =>$this->id,
            'status' => $this->status,
            'status_status'=>$this->remarks,
            'created_at' => $this->created_at->format('d-m-y'),
        ];
    }
}
