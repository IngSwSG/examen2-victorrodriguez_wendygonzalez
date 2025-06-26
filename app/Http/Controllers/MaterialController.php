<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaterialController extends Controller
{
  

    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'unidad_medida' => 'required|string|max:50',
        'descripcion' => 'required|string|max:255',
        'ubicacion' => 'required|string|max:100',
        'categoria_id' => 'required|exists:categorias,id'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors' => $validator->errors()
        ], 422);
    }

    $material = Material::create($request->all());

    return response()->json([
        'success' => true,
        'message' => 'Material creado correctamente.',
        'data' => $material
    ], 201);
}
public function update(Request $request, $id)
{
    $validated = $request->validate([
        'codigo' => 'required|integer',
        'unidadMedida' => 'required|string|max:100',
        'descripcion' => 'required|string|max:255',
        'ubicacion' => 'required|string|max:100',
        'categoria_id' => 'required|exists:categorias,id',
    ]);

    $material = Material::findOrFail($id);
    $material->update($validated);

    return response()->json([
        'success' => true,
        'message' => 'Material actualizado correctamente.',
        'data' => $material->load('categoria')
    ]);
}

public function index()
{
    $materiales = Material::with('categoria')->get();

    return response()->json([
        'success' => true,
        'data' => $materiales
    ]);
}

}