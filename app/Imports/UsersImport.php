<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    public function model(array $row)
    {
        return new User([
            'Nombre' => $row[0],
            'Apellido' => $row[1],
            'Cedula' => $row[1],
            'email' => $row[1],
            'Fecha' => $row[1],
            // Añade aquí el mapeo de columnas según tu archivo Excel
        ]);
    }
}
