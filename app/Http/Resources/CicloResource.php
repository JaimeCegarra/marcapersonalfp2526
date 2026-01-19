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
<<<<<<< HEAD
        $ciclo = parent::toArray($request);
        $ciclo['familia_profesional'] = $this->familiaProfesional->nombre;
        // $ciclo['familia_profesional'] = new FamiliaProfesionalResource($this->familiaProfesional);
        return $ciclo;
=======
        return parent::toArray($request);
>>>>>>> f031882 (Añadiendo el controlador de recursos ciclos)
    }
}
