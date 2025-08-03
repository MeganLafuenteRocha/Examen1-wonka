<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Marca;
use Illuminate\Support\Facades\Validator;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $marcas = Marca::with('productos')->get();
        
        return response()->json([
            'success' => true,
            'data' => $marcas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255|unique:marcas',
            'descripcion' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error en validación',
                'errors' => $validator->errors()
            ], 422);
        }

        $marca = Marca::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Marca creada exitosamente',
            'data' => $marca
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $marca = Marca::with('productos')->find($id);

        if (!$marca) {
            return response()->json([
                'success' => false,
                'message' => 'Marca no encontrada'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $marca
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $marca = Marca::find($id);

        if (!$marca) {
            return response()->json([
                'success' => false,
                'message' => 'Marca no encontrada'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255|unique:marcas,nombre,' . $id,
            'descripcion' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error en validación',
                'errors' => $validator->errors()
            ], 422);
        }

        $marca->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Marca actualizada exitosamente',
            'data' => $marca
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $marca = Marca::find($id);

        if (!$marca) {
            return response()->json([
                'success' => false,
                'message' => 'Marca no encontrada'
            ], 404);
        }

        $marca->delete();

        return response()->json([
            'success' => true,
            'message' => 'Marca eliminada exitosamente'
        ]);
    }
}
