<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

// Models
use App\Models\Denunciante;
use App\Models\Denuncia;

class DenunciasController extends Controller
{
    public function store_landingpage(Request $request){
        // dd($request->all());
        DB::beginTransaction();
        try {

            // Obtener o registar denunciante
            $denunciante = Denunciante::firstOrNew(['ci' => $request->ci]);
            if (!$denunciante->exists) {
                $denunciante->fill([
                    'nombre_completo' => $request->nombre_completo,
                    'telefono' => $request->telefono,
                    'direccion' => $request->direccion,
                ])->save();
            }

            // Crear denuncia
            Denuncia::create([
                'denunciante_id' => $denunciante->id,
                'fecha_registro' => date('Y-m-d'),
                'denunciado' => $request->denunciado,
                'delito' => $request->delito,
                'archivos' => $this->agregar_archivo($request->file, 'denuncias')
            ]);

            DB::commit();
            return response()->json(['success' => 1]);
        } catch (\Throwable $th) {
            DB::rollback();
            // dd($th);
        }
    }
}
