<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CicloResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $ciclo = parent::toArray($request);
        $ciclo['familia_id'] = $this->familiaProfesional->nombre;
        //$ciclo['familia_profesional'] = new FamiliaProfesionalResource($this->familia_profesional);
        return $ciclo;
    }
}
