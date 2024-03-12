<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        // Verifica si se ha enviado un archivo
        if ($request->hasFile('excel_file')) {
            // Importa el archivo Excel y guarda los datos en la base de datos
            Excel::import(new UsersImport, $request->file('excel_file'));

            // Redirige con un mensaje de éxito
            return redirect()->back()->with('success', 'Datos importados correctamente');
        }

        // Redirige con un mensaje de error si no se envió ningún archivo
        return redirect()->back()->with('error', 'No se seleccionó ningún archivo');
    }
}
