<?php

namespace App\Http\Resources\VehicleInspection;

use App\Http\Resources\ParkingYardGate\ParkingYardGateResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Request;

class VehicleInspectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        if (Request::isMethod('post')) {
            return parent::toArray($request);
        }

        return [
            "inspection_id" => $this->id,
            "vehicle_id" => $this->vehicle_id,
            "status" => $this->vehicle_inspection_status,
            "inspection_time" => $this->created_at->diff()->format('%h hrs and %i min'),
            "inspection_time_string" => $this->created_at->format('d-m-Y h:i A'),
        ];
    }
}
