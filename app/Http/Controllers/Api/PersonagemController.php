<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api\Personagem;

class PersonagemController extends Controller
{

    public function index()
    {
        $personagens = Personagem::all();
        return response()->json($personagens);
    }

    public function store(Request $request)
    {
        $data = [
            'nome' => $request->nome,
            'status' => $request->status,
            'genero' => $request->genero,
            'especie' => $request->especie,
            'poder' => $request->poder
        ];

        Personagem::create($data);

        return json_encode([
            "success" => true,
            "message" => 'Heroi cadastro com sucesso'
        ]);
    }

    public function show($id)
    {
        $personagem = Personagem::where('id',$id)->first();
        return response()->json($personagem);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'status' => $request->status,
            'genero' => $request->genero,
            'especie' => $request->especie,
            'poder' => $request->poder
        ];

        Personagem::where('id',$id)->update($data);

        return json_encode([
            "success" => true,
            "message" => "Heroi de id $id foi atualizado com sucesso"
        ]);
    }

    public function delete($id)
    {
        Personagem::where('id',$id)->delete();

        return json_encode([
            "success" => true,
            "message" => "Heroi de id $id foi excluido com sucesso"
        ]);
    }
}
