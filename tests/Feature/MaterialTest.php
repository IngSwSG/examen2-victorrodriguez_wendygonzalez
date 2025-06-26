<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Categoria;

class MaterialTest extends TestCase
{
    use RefreshDatabase;

    public function test_inserta_material_cuando_datos_validos()
    {
        // Crear una categoría de prueba
        $categoria = Categoria::factory()->create();

        // Datos válidos del material
        $data = [
           
            'unidad_medida' => 'kg',
            'descripcion' => 'Acero inoxidable',
            'ubicacion' => 'Almacén 1',
            'categoria_id' => $categoria->id,
        ];

        // Ejecutar el POST al endpoint /insertar_materiales
        $response = $this->postJson('/insertar_materiales', $data);

        // Verifica que la respuesta sea 201 (creado)
        $response->assertStatus(201);

        // Verifica que el JSON tenga el mensaje esperado
        $response->assertJson([
            'success' => true,
            'message' => 'Material creado correctamente.',
            'data' => [
                'unidad_medida' => 'kg',
                'descripcion' => 'Acero inoxidable',
                'ubicacion' => 'Almacén 1',
                'categoria_id' => $categoria->id,
            ],
        ]);

        // Verifica que el registro esté en la base de datos
        $this->assertDatabaseHas('materials', [
            
            'descripcion' => 'Acero inoxidable',
        ]);
    }
}

//Wendy Gonzalez, propone como nuevo metodode prueba lo sigueinte:
//insercion_material_falla_por_longitud_excesiva)
